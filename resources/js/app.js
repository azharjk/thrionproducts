require('./bootstrap');

const context = {
  csrfToken: null
};

class Product {
  constructor(id) {
    this.id = id;
  }

  async delete() {
    const res = await fetch(`/admin/product/${this.id}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': context.csrfToken
      }
    });

    location.reload();
  }
}

const setUpProductAction = () => {
  const deleteButtons = document.querySelectorAll('.js-delete-product');
  if (deleteButtons.length < 1) return;

  deleteButtons.forEach((button) => {
    button.addEventListener('click', () => {
      (new Product(button.dataset.pid)).delete();
    })
  })
}

const setUpCSRFToken = () => {
  const token = document.querySelector('meta[name="csrf-token"]');
  if (token === null) {
    console.warn('CSRF META TAG NOT FOUND');
    return;
  }
  if (token.content === null || token.content.length < 1) {
    console.warn('CSRF META CONTENT IS BROKEN');
    return;
  }

  context.csrfToken = token.content;
}

document.addEventListener('DOMContentLoaded', () => {
  setUpCSRFToken();
  setUpProductAction();
})
