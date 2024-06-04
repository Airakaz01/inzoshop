const dropdownItems = document.querySelectorAll('.my-dropdown');
dropdownItems.forEach(item => {
item.addEventListener('mouseenter', () => {
    const subMenu = item.querySelector('.sub-menu');
    subMenu.classList.remove('d-none');
  });
  item.addEventListener('mouseleave', () => {
    const subMenu = item.querySelector('.sub-menu');
    subMenu.classList.add('d-none');
  });
});
$(document).ready(function() { 
  $(window).scroll(function() { 
    if ($(this).scrollTop() > 70) { 
      $('.website-details-container, .my-navbar').addClass('sticky'); } 
      else { 
        $('.website-details-container, .my-navbar').removeClass('sticky'); } 
      }); 
    });
const openButtons = document.querySelectorAll('.open-button');
const closeButtons = document.querySelectorAll('.close-button');
const subNavMenus = document.querySelectorAll('.sub-small-nav-item');

openButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    subNavMenus[index].classList.toggle('d-none'); // Toggle visibility of sub-menu
    closeButtons[index].classList.toggle('d-none'); // Toggle visibility of close button
    button.classList.toggle('d-none'); // Toggle visibility of open button
  });
});

closeButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    subNavMenus[index].classList.toggle('d-none'); // Toggle visibility of sub-menu
    openButtons[index].classList.toggle('d-none'); // Toggle visibility of open button
    button.classList.toggle('d-none'); // Toggle visibility of close button
  });
});
const toggler = document.querySelector(".btn");
toggler.addEventListener("click",function(){
    document.querySelector("#sidebar").classList.toggle("collapsed");
});



const bannerItems = document.querySelectorAll('.banner-item');
const bannerTrack = document.querySelector('.banner-track');
const activeBannerItem = document.querySelector('.banner-item.active');

let currentBannerIndex = 0;

function showNextBannerItem() {
  const previousBannerItem = bannerItems[currentBannerIndex];
  const nextBannerIndex = (currentBannerIndex + 1) % bannerItems.length;
  const nextBannerItem = bannerItems[nextBannerIndex];

  previousBannerItem.classList.remove('active');
  previousBannerItem.classList.add('inactive');
  previousBannerItem.classList.toggle('d-none');
  // previousBannerItem.classList.toggle('active');
  // previousBannerItem.classList.toggle('inactive');
  
  nextBannerItem.classList.add('active');
  nextBannerItem.classList.remove('inactive');
  nextBannerItem.classList.toggle('d-none');
  // nextBannerItem.classList.toggle('inactive');
  // nextBannerItem.classList.toggle('active');

  currentBannerIndex = nextBannerIndex;
}

setInterval(showNextBannerItem, 5000); // Change banner-item every 5 seconds


  const btn = document.getElementById("add-to-cart-btn");

  btn.addEventListener("click", function() {
    // Send an AJAX request to add the product to the cart
    fetch("/cart/store", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        // Add product data here
      })
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Refresh the page
        // window.location.reload();
      } else {
        // Handle error
      }
    })
    .catch(error => {
      console.error("Error:", error);
    });
  });



