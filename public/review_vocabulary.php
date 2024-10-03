

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>review_vocabulary</title>
</head>
<body>
    <div class = "review_vocal">

        <div class="categories style_input">
            <input type="radio" name ="categories" id = "option1" checked> <label for="option1">Grammar</label>
            <input type="radio" name ="categories" id = "option2" style="margin-left: 20px"> <label for="option2">Vocabulary</label>
        </div>
        <div class = "container_review_vocabulary">
            <H5>Your vocabulary</H5>

               <!-- biểu đồ -->
            <div class="bar-container">
                <div class = "container">
                    <div class="bar weak_container" id="weak-container">
                        <div class="bar weak" id="weak-bar"></div>
                        <span id="weak-count" data-value="2" >2</span>
                    </div>
                        <p>Weak words</p>
                </div>
                <div  class = "container">
                    <div class="bar strong_container" id="strong-container">
                        <div class="bar strong" id="strong-bar"></div>
                        <span id="strong-count" data-value="7" >5</span>
                    </div>
                        <p>Strong words</p>
                </div>
            </div>

            <div class="vocal_filter">
                <p>Filter by</p>
                <select>
                    <option>Favorite vocabulary</option>
                    <option>Weak vocabulary</option>
                    <option>Strong vocabulary</option>
                </select>
                <button type="button">Review now</button>
            </div><br>
            <div class="word_container">
                <div class = "vocal_list_row">
                    <div class ="main">
                        <i class="fa-solid fa-chevron-down" style="color: #666E7E;" ></i>
                        <img src="../image_hocngoaingu/campsite.jpg" alt="Campsite Image">
                        <i class="fa-solid fa-volume-high" style="color: #116EEE;"></i>
                    </div>
                    <p class = "vocab"><strong>a campsite</strong></p>
                    <p class = "vocal_mean">a campsite</p>
                    <p style="text-align:center;" class = "classify">Noun</p>
                    <div class = "extend">
                        <i class="fa-regular fa-star" style="color: #A7B0B7;"></i>
                    </div>
                    <div class = "vocal_example">
                        <i class="fa-solid fa-volume-high" style="color: #116EEE;"></i>
                        <p><em>We stayed at an amazing campsite next to a beautiful lake.</em></p>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <script src="../assets/javascript/review.js"></script>
</body>
</html>