// let slideIndex = 0;
// showSlides();

// function showSlides() {
//   let i;
//   let slides = document.getElementsByClassName("mySlides");
//   let dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";  
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}    
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";  
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 4000); // Change image every 4 seconds
// }

// function myFunction() {
//   var x = document.getElementById("submenu_account");
//   if (x.className === "account") {
//     x.className += " responsive";
//   } else {
//     x.className = "account";
//   }
// }
//------------------------------Tăng giảm số lượng trong trang chi tiết sản phẩm------------------------------------------
const soluong = document.getElementById("amount");
const Tang = document.getElementById("btn_Tang");
const Giam = document.getElementById("btn_Giam");
let i = 1;

// Add click event to buttons
Tang.addEventListener("click", () => {
  i++;
  i = (i < 10) ? "0" + i : i;
  amount.innerText = i;
  console.log("i");
});
Giam.addEventListener("click", () => {
  if (i >= 1) {
    i--;
    i = (i < 10) ? "0" + i : i;
  }
  if (i < 1) {
    i = "01";
  }
  amount.innerText = i;
});