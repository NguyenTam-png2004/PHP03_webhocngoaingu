// Biểu đồ vocabulary

        // Function to update chart dynamically
        function updateChart(bar, value, total) {
        // Tính tỷ lệ phần trăm và đặt chiều cao
        const percentage = (value / total) * 100;
        bar.style.height = percentage + '%';
    }

    
    const weakContainer = document.getElementById('weak-container');
    const weak = weakContainer.querySelector('span');
    const weakValue = parseInt(weak.dataset.value);
    const weakBar = document.getElementById('weak-bar');
    console.log(weakValue);
        updateChart(weakBar, weakValue,10);

    const strongContainer = document.getElementById('strong-container');
    const strong = strongContainer.querySelector('span');
    const strongValue = parseInt(strong.dataset.value);
    const strongBar = document.getElementById('strong-bar');
        updateChart(strongBar, strongValue, 10);




function toggleVisibility(toggleStars, toggle_content) {
    for (let i = 0; i < toggleStars.length; i++) {
        toggleStars[i].addEventListener('click', function() {
            console.log(1)
            if (toggle_content[i].style.display === "none" || toggle_content[i].style.display === "") {
                toggle_content[i].style.display = "block"; // Show the content
            } else {
                toggle_content[i].style.display = "none"; // Hide the content
            }
        });
    }
}
var toggleStars1 = document.getElementsByClassName('vocal_list_row');
var toggle_content1 = document.getElementsByClassName('vocal_example');
toggleVisibility(toggleStars1, toggle_content1);


var menuIcon1 = document.querySelector('.avatar_wrapper img')
var menu1 = document.querySelector('.menu_avatar')

function toggleMenu (menuIcon, menu){
    menuIcon.addEventListener('click', function(event){
        menu.classList.toggle('show');
    })
    document.addEventListener('click', function(event){
        if (event.target!= menuIcon && event.target!= menu){
            menu.classList.remove('show');
        }
    })
}
toggleMenu (menuIcon1, menu1)

var menuIcon2 = document.querySelector('.language_wrapper img')
var menu2 = document.querySelector('.menu_language')
toggleMenu (menuIcon2, menu2)

var menuIcon3 = document.querySelector('.bxh_wrapper img')
var menu3 = document.querySelector('.container_BXH')
toggleMenu (menuIcon3, menu3)

