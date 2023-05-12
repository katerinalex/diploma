function openPage(evt, pageName) {
	
	// Declare all variables
	var i, year, pageslinks;
  
	// Get all elements with class="year" and hide them
	year = document.getElementsByClassName("year");
	for (i = 0; i < year.length; i++) {
        year[i].style.display = "none";
	}
  
	// Get all elements with class="pagelinks" and remove the class "active"
	pageslinks = document.getElementsByClassName("pageslinks");
	for (i = 0; i < pageslinks.length; i++) {
        pageslinks[i].className = pageslinks[i].className.replace(" active", "");
	}
  
	// Show the current tab, and add an "active" class to the button that opened the tab
	document.getElementById(pageName).style.display = "block";
	evt.currentTarget.className += " active";
  }