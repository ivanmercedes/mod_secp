document.addEventListener("DOMContentLoaded", () => {
  const accordionHeader = document.querySelectorAll(".dgcp-accordion-header");
  accordionHeader.forEach((header) => {
    header.addEventListener("click", function () {
      const accordionContent = header.parentElement.querySelector(
        ".dgcp-accordion-content",
      );
      let accordionMaxHeight = accordionContent.style.maxHeight;
      if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
        accordionContent.style.maxHeight = `100%`;
        header.querySelector(".fas").classList.remove("fa-plus");
        header.querySelector(".fas").classList.add("fa-minus");
        // header.parentElement.classList.add("test");
      } else {
        accordionContent.style.maxHeight = `0px`;
        header.querySelector(".fas").classList.add("fa-plus");
        header.querySelector(".fas").classList.remove("fa-minus");
        // header.parentElement.classList.remove("test");
      }
    });
  });
});
