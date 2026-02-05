// ===== ANIMATION COMPTEURS (INDICATEURS) =====
document.addEventListener('DOMContentLoaded', function() {
    
    // Fonction d'animation des compteurs
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-count'));
            const format = counter.getAttribute('data-format');
            const duration = 2000; // 2 secondes
            const increment = target / (duration / 16); // 60 FPS
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                
                if (current < target) {
                    // Formatage selon le type
                    if (format === 'kplus') {
                        counter.textContent = Math.floor(current) + 'k+';
                    } else if (format === 'score') {
                        counter.textContent = current.toFixed(1);
                    } else if (format === 'percent') {
                        counter.textContent = Math.floor(current) + '%';
                    } else {
                        counter.textContent = Math.floor(current);
                    }
                    
                    requestAnimationFrame(updateCounter);
                } else {
                    // Valeur finale
                    if (format === 'kplus') {
                        counter.textContent = target + 'k+';
                    } else if (format === 'score') {
                        counter.textContent = target.toFixed(1);
                    } else if (format === 'percent') {
                        counter.textContent = target + '%';
                    } else {
                        counter.textContent = target;
                    }
                }
            };
            
            updateCounter();
        });
    }
    
    // Observer pour détecter quand la section des stats est visible
    const statsSection = document.querySelector('.stats-banner');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target); // Animer une seule fois
                }
            });
        }, { threshold: 0.3 });
        
        observer.observe(statsSection);
    }
});

// ===== GESTION DU SCROLL POUR LIENS ONE-PAGE =====
document.addEventListener('DOMContentLoaded', function() {
    
    // Fonction de scroll fluide
    function smoothScrollTo(target) {
        const element = document.querySelector(target);
        if (!element) return;
        
        const headerHeight = document.querySelector('.diabe-header')?.offsetHeight || 80;
        const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
        const offsetPosition = elementPosition - headerHeight - 20; // 20px de marge supplémentaire
        
        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    }
    
    // Gestionnaire pour tous les liens avec href="#..."
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Ignorer les liens vides ou juste "#"
            if (!href || href === '#') return;
            
            // Ignorer les liens qui ouvrent des modals
            if (this.hasAttribute('data-bs-toggle')) return;
            
            e.preventDefault();
            smoothScrollTo(href);
            
            // Fermer le menu mobile si ouvert
            setTimeout(() => {
                const menuWrapper = document.querySelector('.th-menu-wrapper');
                const menuToggle = document.querySelector('.th-menu-toggle');
                
                if (menuWrapper && menuWrapper.classList.contains('open')) {
                    if (menuToggle) menuToggle.click();
                }
            }, 100);
        });
    });
    
    // Mettre à jour l'URL sans scroll
    window.addEventListener('hashchange', function() {
        if (window.location.hash) {
            smoothScrollTo(window.location.hash);
        }
    });
    
    // Si la page se charge avec un hash
    if (window.location.hash) {
        setTimeout(() => {
            smoothScrollTo(window.location.hash);
        }, 100);
    }
});

// ===== DONATION MODAL LOGIC avec Stripe =====
document.addEventListener('DOMContentLoaded', function() {
    let selectedAmount = 0;
    const stripe = Stripe('{{ config("services.stripe.key") }}');

    // Sélection montant prédéfini
    document.querySelectorAll('.donation-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.donation-option').forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            selectedAmount = parseInt(this.getAttribute('data-amount'));
            document.getElementById('customAmount').value = '';
        });
    });

    // Montant personnalisé
    document.getElementById('customAmount').addEventListener('input', function() {
        document.querySelectorAll('.donation-option').forEach(opt => opt.classList.remove('active'));
        selectedAmount = parseInt(this.value) || 0;
    });

    // PayPal
    document.getElementById('paypalBtn').addEventListener('click', function() {
        if (selectedAmount <= 0) {
            showNotification('⚠️ Attention', 'Veuillez sélectionner ou entrer un montant.', 'error');
            return;
        }

        showNotification('🎉 Merci !', `Redirection vers PayPal pour ${selectedAmount}€...`, 'success');
        
        setTimeout(() => {
            const paypalUrl = `https://www.paypal.com/paypalme/votrenom/${selectedAmount}`;
            window.open(paypalUrl, '_blank');
        }, 1000);
    });

    // Stripe - Carte bancaire
    document.getElementById('cardBtn').addEventListener('click', async function() {
        if (selectedAmount <= 0) {
            showNotification('⚠️ Attention', 'Veuillez sélectionner ou entrer un montant.', 'error');
            return;
        }

        try {
            // Désactiver le bouton
            this.disabled = true;
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Traitement...';

            // Notification élégante
            showNotification('🎉 Merci pour votre don !', `Redirection vers le paiement sécurisé de ${selectedAmount}€...`, 'success');

            // Créer session Stripe
            const response = await fetch('{{ route("donation.checkout") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ amount: selectedAmount })
            });

            const session = await response.json();

            if (session.error) {
                throw new Error(session.error);
            }

            // Redirection Stripe
            const result = await stripe.redirectToCheckout({
                sessionId: session.id
            });

            if (result.error) {
                showNotification('❌ Erreur', result.error.message, 'error');
            }

        } catch (error) {
            console.error('Erreur:', error);
            showNotification('❌ Erreur', 'Une erreur est survenue. Veuillez réessayer.', 'error');
        } finally {
            this.disabled = false;
            this.innerHTML = '<i class="fas fa-credit-card" style="color: var(--diabe-green);"></i> Carte bancaire';
        }
    });

    // Fonction notification
    function showNotification(title, message, type = 'info') {
        const oldNotif = document.getElementById('customNotification');
        if (oldNotif) oldNotif.remove();

        const notification = document.createElement('div');
        notification.id = 'customNotification';
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            padding: 20px 25px;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            z-index: 99999;
            min-width: 300px;
            max-width: 400px;
            animation: slideInRight 0.3s ease;
            border-left: 4px solid ${type === 'success' ? '#22B573' : type === 'error' ? '#dc3545' : '#007bff'};
        `;

        notification.innerHTML = `
            <div style="display: flex; align-items: start; gap: 15px;">
                <div style="
                    width: 40px;
                    height: 40px;
                    background: ${type === 'success' ? '#22B573' : type === 'error' ? '#dc3545' : '#007bff'};
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                    color: white;
                    font-size: 20px;
                    font-weight: bold;
                ">
                    ${type === 'success' ? '✓' : type === 'error' ? '✕' : 'ℹ'}
                </div>
                <div style="flex: 1;">
                    <h4 style="margin: 0 0 5px 0; color: #333; font-size: 16px; font-weight: 700;">${title}</h4>
                    <p style="margin: 0; color: #666; font-size: 14px; line-height: 1.4;">${message}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" style="
                    background: none;
                    border: none;
                    font-size: 24px;
                    color: #999;
                    cursor: pointer;
                    padding: 0;
                    line-height: 1;
                    width: 24px;
                    height: 24px;
                ">×</button>
            </div>
        `;

        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from { transform: translateX(400px); opacity: 0; }
                to { transform: translateX(0); opacity: 1; }
            }
            @keyframes slideOutRight {
                from { transform: translateX(0); opacity: 1; }
                to { transform: translateX(400px); opacity: 0; }
            }
        `;
        document.head.appendChild(style);

        document.body.appendChild(notification);

        if (type !== 'error') {
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 4000);
        }
    }
});

// ===== MENU MOBILE - Ouverture et fermeture =====
(function() {
    // Ouverture du menu
    document.addEventListener('click', function(e) {
        const openBtn = e.target.closest('[data-open-mobile-menu]');
        if (!openBtn) return;

        const templateToggle = document.querySelector('.th-menu-wrapper .th-menu-toggle');
        if (templateToggle) templateToggle.click();
    });

    // Fermeture automatique au clic sur un lien du menu mobile
    document.querySelectorAll('.th-mobile-menu a').forEach(link => {
        link.addEventListener('click', function(e) {
            // Le scroll sera géré par le gestionnaire global des liens one-page
            // On ferme juste le menu après un court délai
            setTimeout(() => {
                const menuToggle = document.querySelector('.th-menu-toggle');
                const menuWrapper = document.querySelector('.th-menu-wrapper');
                
                if (menuWrapper && menuWrapper.classList.contains('open')) {
                    if (menuToggle) menuToggle.click();
                }
            }, 100);
        });
    });
})();
