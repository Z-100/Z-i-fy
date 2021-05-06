function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
} 

function searchBar() {
    const input = document.getElementById("searchInput");
    const filter = document.getElementById("searchFilter");
    const upperCase = input.value.toUpperCase();
    const table = document.getElementById("searchFieldTable");

    for (let tr of table.getElementsByTagName("tr")) {
        td = tr.getElementsByTagName("td")[filter.value];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(upperCase) > -1) {
                tr.style.display = "";
            } else {
                tr.style.display = "none";
            }
        }
    }
}

function searchDropDown() {
    document.getElementById("searchDropDown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
          }
        }
    }
}