let amountElement = document.getElementById("amount");
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

let deleteElement = document.getElementById("cart_delete");
let cart_list_info = document.getElementById("cart_list-info");
deleteElement.addEventListener("click", () => {
  cart_list_info.remove();
});
