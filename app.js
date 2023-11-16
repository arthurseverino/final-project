const form = document.querySelector('.form');
const products = document.querySelector('.products');
const total = document.querySelector('.total');
const heading = document.querySelector('.heading');
const username = document.querySelector('.username');

let totalPrice = 0;

const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach((button) => {
  button.addEventListener('click', (event) => {
    const sneaker = event.target.parentElement.parentElement;
    const name = sneaker.querySelector('.product-name').textContent;
    const price = Number(
      sneaker.querySelector('.product-price').textContent.slice(1)
    );
    totalPrice += price;
    total.textContent = `Total: $${totalPrice.toFixed(2)}`;
    total.style.fontSize = '1.5rem';
    total.style.fontWeight = '700';
    total.style.color = 'green';
    alert(` ${name} successfully added to cart! \n Total price updated below.`);
  });
});

form.addEventListener('submit', (e) => {
  e.preventDefault();
  heading.style.display = 'flex';
  heading.textContent = `Hi ${username.value}, welcome to Arthur's Sneaker Shop! `;
  form.style.display = 'none';
  products.style.display = 'flex';
  total.style.display = 'flex';
  heading.style.display = 'flex';
});
