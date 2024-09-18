document.addEventListener("DOMContentLoaded", function() {
    // Store all buttons and plans
    const buttons = document.querySelectorAll(".plan-btn");
    const mobilePlans = {
        monthly: document.getElementById("monthly-mobile"),
        quarterly: document.getElementById("quarterly-mobile"),
        annual: document.getElementById("annual-mobile")
    };
    const desktopPlans = {
        monthly: document.getElementById("monthly-desktop"),
        quarterly: document.getElementById("quarterly-desktop"),
        annual: document.getElementById("annual-desktop")
    };

    // Function to hide all plans
    function hideAllPlans() {
        Object.values(mobilePlans).forEach(plan => plan.style.display = 'none');
        Object.values(desktopPlans).forEach(plan => plan.style.display = 'none');
    }

    // Function to show the selected plan
    function showPlan(planType) {
        hideAllPlans();
        mobilePlans[planType].style.display = 'block';
        desktopPlans[planType].style.display = 'block';
    }

    // Function to set the active button
    function setActiveButton(activeButton) {
        buttons.forEach(button => {
            button.classList.remove('active'); // Remove class from all buttons
        });
        activeButton.classList.add('active'); // Add class to the active button

    }

    // Add click events to buttons
    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const planType = this.getAttribute("data-plan");
            showPlan(planType);
            setActiveButton(this);
        });
    });

    // By default, display the monthly plan
    showPlan('monthly');
    setActiveButton(document.getElementById('monthly-btn'));
});


// Slider Swiper
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper-plans', {
        slidesPerView: 1,
        spaceBetween: 15,
        autoHeight: true,
        lazy: {
          loadOnTransitionStart: true,
          loadPrevNext: true,
        },
        lazyPreloadPrevNext: 1,
        centeredSlides: true,
        on: {
            slideChangeTransitionStart: function() {
              swiper.updateAutoHeight();
            },
          },
    });
  });
