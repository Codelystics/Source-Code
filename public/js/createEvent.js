document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    const submitButton = document.querySelector('.btn-submit');

    // Check if .btn-next is present before attempting to use it
    const nextButton = document.querySelector('.btn-next');

    // Check if .btn-prev is present before attempting to use it
    const prevButton = document.querySelector('.btn-prev');

    let currentTab = 0;

    showTab(currentTab);

    tabButtons.forEach(function (button, index) {
        button.addEventListener('click', function (event) {
            if (event.target.tagName.toLowerCase() === 'button') {
                event.preventDefault();
                currentTab = index;
                showTab(currentTab);
                toggleSubmitButton(tabContents[currentTab].id);
            }
        });
    });

    function showTab(tabIndex) {
        tabContents.forEach(function (tab, index) {
            if (index === tabIndex) {
                tab.classList.add('active');
                tabButtons[index].classList.add('active');
                tabButtons[index].removeAttribute('disabled');
            } else {
                tab.classList.remove('active');
                tabButtons[index].classList.remove('active');
                tabButtons[index].setAttribute('disabled', 'disabled');
            }
        });

        if (tabIndex === 0) {
            if (prevButton) {
                prevButton.style.display = 'none';
            }
        } else {
            if (prevButton) {
                prevButton.style.display = 'inline-block';
            }
        }

        if (tabIndex === tabContents.length - 1) {
            if (nextButton) {
                nextButton.style.display = 'none';
            }
            submitButton.style.display = 'inline-block';
        } else {
            if (nextButton) {
                nextButton.style.display = 'inline-block';
            }
            submitButton.style.display = 'none';
        }
    }

    function toggleSubmitButton(tabId) {
        if (tabId === 'tab3') {
            submitButton.style.display = 'inline-block';
        } else {
            submitButton.style.display = 'none';
        }
    }
});
