
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

    
        // Menu mobile - Ouverture et fermeture automatique
        (function() {
        // Ouverture du menu
        document.addEventListener('click', function(e) {
            const openBtn = e.target.closest('[data-open-mobile-menu]');
            if (!openBtn) return;

            const templateToggle = document.querySelector('.th-menu-wrapper .th-menu-toggle');
            if (templateToggle) templateToggle.click();
        });

    // ✅ Fermeture automatique au clic sur un lien du menu mobile
    document.querySelectorAll('.th-mobile-menu a').forEach(link => {
        link.addEventListener('click', function(e) {
            // Laisser le comportement par défaut (scroll vers la section)
            // Fermer le menu après un court délai
            setTimeout(() => {
                const menuToggle = document.querySelector('.th-menu-toggle');
                const menuWrapper = document.querySelector('.th-menu-wrapper');
                
                // Vérifier si le menu est ouvert
                if (menuWrapper && menuWrapper.classList.contains('open')) {
                    if (menuToggle) menuToggle.click();
                }
            }, 100);
        });
    });
})();
 