const firstNav = document.querySelector(".firstnav-toggler");

firstNav.addEventListener("click", () => {
  const navigation = document.querySelector(".firstnav");

  navigation.classList.toggle("active");
});

const secondNav = document.querySelector(".secondnav-toggler");

secondNav.addEventListener("click", () => {
  const navigation = document.querySelector(".secondnav");

  navigation.classList.toggle("active");
});
