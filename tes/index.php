<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tes | House Ilmu Indonesia</title>
		<link rel="icon" href="../assets/img/logo.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
		<link rel="stylesheet" href="../assets/css/navbar-footer.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="../assets/css/article.css">
	</head>
	<body>
		
		<div class="filter-select container-xl d-flex justify-content-center align-items-center">
			<select id="filterSelect">
				<option value="none">All</option>
				<option value="business">Business</option>
				<option value="technology">Technology</option>
				<option value="marketing">Marketing</option>
				<option value="product">Product</option>
				<option value="humancapital">Human Capital</option>
			</select>
		</div>

		<div class="articles-container container-xxl  mt-5">
			<div class="articles d-flex flex-wrap justify-content-around align-items-center">
				<div id="business" class="articles-list col-12 col-md-4 col-lg-4 flex-column justify-content-start align-items-start p-3 m-1 rounded-4" style="background-color: #FFDD95;">
					<img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
					<h5 class="my-2">Business</h5>
				</div>
				<div id="technology" class="articles-list col-12 col-md-4 col-lg-4 flex-column justify-content-start align-items-start p-3 m-1 rounded-4" style="background-color: #FFDD95;">
					<img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
					<h5 class="my-2">Technology</h5>
				</div>
				<div id="marketing" class="articles-list col-12 col-md-4 col-lg-4 flex-column justify-content-start align-items-start p-3 m-1 rounded-4" style="background-color: #FFDD95;">
					<img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
					<h5 class="my-2">Marketing</h5>
				</div>
				<div id="product" class="articles-list col-12 col-md-4 col-lg-4 flex-column justify-content-start align-items-start p-3 m-1 rounded-4" style="background-color: #FFDD95;">
					<img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
					<h5 class="my-2">Product</h5>
				</div>
				<div id="humancapital" class="articles-list col-12 col-md-4 col-lg-4 flex-column justify-content-start align-items-start p-3 m-1 rounded-4" style="background-color: #FFDD95;">
					<img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
					<h5 class="my-2">Humancapital</h5>
				</div>
			</div>
		</div>
		<script>
			const filterSelect = document.getElementById('filterSelect');
			const articlesContainer = document.querySelector('.articles-container');

			filterSelect.addEventListener('change', function() {
  			const selectedValue = this.value;

			const articles = articlesContainer.querySelectorAll('.articles-list');

  			articles.forEach(article => {
    		const articleId = article.id;
    		if (selectedValue === 'none') {
      				article.style.display = 'flex'; // Show all articles if "All" is selected
    			} else if (articleId === selectedValue) {
      				article.style.display = 'flex'; // Show article with matching ID
    			} else {
      				article.style.display = 'none'; // Hide other articles
    			}
  				});
			});
		</script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script>
		const filterSelect = document.getElementById('filterSelect');
		const articlesContainer = document.querySelector('.articles-container');
		filterSelect.addEventListener('change', function() {
		const selectedValue = this.value;
		const articles = articlesContainer.querySelectorAll('.articles-list');
		articles.forEach(article => {
		const articleId = article.id;
		article.style.display = selectedValue === 'none' ? 'block' : (articleId === selectedValue ? 'block' : 'none');
		});
		});
		</script> -->
	</body>
</html>