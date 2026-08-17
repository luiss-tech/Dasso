const toastContainer = document.createElement('div');
toastContainer.className = 'toast-container';
document.body.append(toastContainer);

function createToast(message, type = 'info', duration = 4500) {
  const toast = document.createElement('div');
  toast.className = `toast toast-${type}`;
  toast.textContent = message;
  toastContainer.append(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(12px)';
    toast.addEventListener('transitionend', () => toast.remove(), { once: true });
  }, duration);
}

function toggleModal(modalId) {
  const modal = document.getElementById(modalId);
  if (!modal) return;
  modal.classList.toggle('open');
}

function initSkeletons() {
  document.querySelectorAll('[data-skeleton]').forEach((node) => {
    node.classList.add('skeleton');
  });
}

export { createToast, toggleModal, initSkeletons };
