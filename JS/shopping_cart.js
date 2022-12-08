let amountElement = document.getElementById("qty");
let amount = amountElement.value;

let priceElement = document.getElementById("cart_price");
let totalElement = document.getElementById("cart_price-total");
let price = priceElement.innerHTML;
totalElement.innerHTML = price;

let render = (amount) => {
  amountElement.value = amount;
};

let render_totalprice = (price, amount) => {
  totalElement.innerHTML = price * amount;
};

//Handle Plus
let handlePlus = () => {
  amount++;
  render(amount);
  render_totalprice(price, amount);
};

//Handle Minus
let handleMinus = () => {
  if (amount > 1) amount--;
  render(amount);
  render_totalprice(price, amount);
};

amountElement.addEventListener("input", () => {
  amount = amountElement.value;
  amount = parseInt(amount);
  amount = isNaN(amount) || amount == 0 ? 1 : amount;
  render(amount);
  console.log(amount);
});
