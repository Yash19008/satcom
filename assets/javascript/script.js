function remoteOpsHandleClick() {
  alert("Navigating to the About Us section!");
  // Add navigation or dynamic logic here if needed
}

function openNav() {
  document.getElementById("sideNav").style.width = "350px";
}

function closeNav() {
  document.getElementById("sideNav").style.width = "0";
}

window.onload = function () {
  const carousel = document.querySelector(".carousel");
  const firstImage = carousel.querySelector("img");
  const arrowIcons = document.querySelectorAll(".wrapper i");
  const dotsContainer = document.querySelector(".dots-container");
  const images = carousel.querySelectorAll("img");
  const imagesPerGroup = 5; // ONE image per dot
  const totalGroups = 4;
  let autoScrollInterval;

  // Clear existing dots
  dotsContainer.innerHTML = "";

  // Create one dot per image
  for (let i = 0; i < totalGroups; i++) {
    const dot = document.createElement("div");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => {
      const cardWidth = firstImage.clientWidth + 10;
      carousel.scrollLeft = i * cardWidth;
      updateActiveDot(i);
    });
    dotsContainer.appendChild(dot);
  }

  const updateActiveDot = (activeIndex) => {
    document.querySelectorAll(".dots-container .dot").forEach((dot, index) => {
      dot.classList.toggle("active", index === activeIndex);
    });
  };

  const updateDotOnScroll = () => {
    const cardWidth = firstImage.clientWidth + 10;
    const groupIndex = Math.round(carousel.scrollLeft / cardWidth);
    updateActiveDot(groupIndex);
  };

  carousel.addEventListener("scroll", () => {
    clearTimeout(carousel._dotTimeout);
    carousel._dotTimeout = setTimeout(updateDotOnScroll, 100);
  });

  const toggleArrowIcons = () => {
    setTimeout(() => {
      const maxScroll = Math.round(carousel.scrollWidth - carousel.clientWidth);
      arrowIcons[0].style.display = "none";
      arrowIcons[1].style.display = "none";
    }, 100);
  };

  const scrollCarousel = (direction) => {
    const cardWidth = firstImage.clientWidth + 10;
    const scrollAmount = direction === "right" ? cardWidth : -cardWidth;
    const maxScroll = carousel.scrollWidth - carousel.clientWidth;

    carousel.scrollLeft = Math.min(
      Math.max(carousel.scrollLeft + scrollAmount, 0),
      maxScroll
    );
    toggleArrowIcons();
    updateDotOnScroll();
  };

  arrowIcons.forEach((icon) => {
    icon.addEventListener("click", () => {
      const direction = icon.id === "right" ? "right" : "left";
      scrollCarousel(direction);
    });
  });

  let isDragging = false;
  let startX = 0;
  let scrollStart = 0;
  let scrollDiff = 0;

  const autoCenterImage = () => {
    const cardWidth = firstImage.clientWidth + 10;
    const offset = carousel.scrollLeft % cardWidth;
    const maxScroll = carousel.scrollWidth - carousel.clientWidth;

    if (carousel.scrollLeft > 0 && carousel.scrollLeft < maxScroll) {
      if (offset > cardWidth / 3) {
        carousel.scrollLeft += cardWidth - offset;
      } else {
        carousel.scrollLeft -= offset;
      }
    }
    toggleArrowIcons();
  };

  const startDragging = (event) => {
    isDragging = true;
    startX = event.pageX || event.touches[0].pageX;
    scrollStart = carousel.scrollLeft;
    carousel.classList.add("dragging");
  };

  const duringDrag = (event) => {
    if (!isDragging) return;
    const currentX = event.pageX || event.touches[0].pageX;
    scrollDiff = currentX - startX;
    carousel.scrollLeft = scrollStart - scrollDiff;
  };

  const stopDragging = () => {
    if (!isDragging) return;
    isDragging = false;
    carousel.classList.remove("dragging");
    if (Math.abs(scrollDiff) > 10) {
      autoCenterImage();
    }
  };

  carousel.addEventListener("mousedown", startDragging);
  carousel.addEventListener("touchstart", startDragging);
  document.addEventListener("mousemove", duringDrag);
  carousel.addEventListener("touchmove", duringDrag);
  document.addEventListener("mouseup", stopDragging);
  carousel.addEventListener("touchend", stopDragging);

  const startAutoScroll = () => {
    const cardWidth = firstImage.clientWidth + 10;
    autoScrollInterval = setInterval(() => {
      const maxScroll = carousel.scrollWidth - carousel.clientWidth;
      if (carousel.scrollLeft >= maxScroll - 5) {
        carousel.scrollLeft = 0;
        updateActiveDot(0);
      } else {
        carousel.scrollLeft += cardWidth;
        updateDotOnScroll();
      }
    }, 2000);
  };

  toggleArrowIcons();
  startAutoScroll();
};