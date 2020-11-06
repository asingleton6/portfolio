// Get the button, and when the user clicks on it, execute myFunction
document.getElementById("click-about-btn").onclick = function() {
  btnFunction(this.id)
};
document.getElementById("click-portfolio-btn").onclick = function() {
  btnFunction(this.id)
};
document.getElementById("click-contact-btn").onclick = function() {
  btnFunction(this.id)
};

let contactButton = document.querySelector("#submit");

contactButton.addEventListener('click', function(event) {
  if (event.target.classList.contains('btn-default')) {
    function contactFormOpen() {
      document.getElementById("contact-content").classList.toggle("hide");
      document.getElementById("click-contact-btn").classList.toggle("active");
      document.getElementById("about-content").classList.add("hide");
      document.getElementById("click-about-btn").classList.remove("active");
      document.getElementById("portfolio-content").classList.add("hide");
      document.getElementById("click-portfolio-btn").classList.remove("active");
    }
  }
}, false);
/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
function btnFunction(btn) {
  var activeBtn = btn;
  if (activeBtn === "click-about-btn") {
    document.getElementById("about-content").classList.toggle("hide");
    document.getElementById("click-about-btn").classList.toggle("active");
    document.getElementById("portfolio-content").classList.add("hide");
    document.getElementById("click-portfolio-btn").classList.remove("active");
    document.getElementById("contact-content").classList.add("hide");
    document.getElementById("click-contact-btn").classList.remove("active");
  } else if (activeBtn === "click-portfolio-btn") {
    document.getElementById("portfolio-content").classList.toggle("hide");
    document.getElementById("click-portfolio-btn").classList.toggle("active");
    document.getElementById("about-content").classList.add("hide");
    document.getElementById("click-about-btn").classList.remove("active");
    document.getElementById("contact-content").classList.add("hide");
    document.getElementById("click-contact-btn").classList.remove("active");
  } else if (activeBtn === "click-contact-btn") {
    document.getElementById("contact-content").classList.toggle("hide");
    document.getElementById("click-contact-btn").classList.toggle("active");
    document.getElementById("about-content").classList.add("hide");
    document.getElementById("click-about-btn").classList.remove("active");
    document.getElementById("portfolio-content").classList.add("hide");
    document.getElementById("click-portfolio-btn").classList.remove("active");

  }
}