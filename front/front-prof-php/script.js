document.addEventListener('DOMContentLoaded', () => {
    // Redirecionamento de botões com data-page
    const navButtons = document.querySelectorAll('[data-page]');

    navButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetPage = button.getAttribute('data-page');
            
            if (targetPage && !button.classList.contains('active')) {
                window.location.href = targetPage;
            }
        });
    });

    // Ação de Notificações
    const notificationBtn = document.querySelector('.notification-button');
    
    if (notificationBtn) {
        notificationBtn.addEventListener('click', () => {
            const message = notificationBtn.getAttribute('data-notification') || 'Sem notificações.';
            alert(message);
            
            const dot = notificationBtn.querySelector('.notification-dot');
            if (dot) {
                dot.style.display = 'none';
            }
        });
    }
});