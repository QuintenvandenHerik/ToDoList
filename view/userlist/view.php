<p><button onclick="sortList()">Sort status</button></p>
<input type="text" id="inputStatus" onkeyup="filterListStatus()" placeholder="Search for status...">
<input type="text" id="inputTime" onkeyup="filterListTime()" placeholder="Search for time...">
<ul id="taskList">
<?php
    foreach($getAllListItems as $item) {
        printf("<li><div><h2> %s </h2>%s<br><p>status: %s</p><h4>time: %s</h4><a href='%stodolist/editItem/%s'>edit</a> &nbsp <a href='%stodolist/deleteItem/%s/%s'>x</a></div></li>", 
            $item["task_name"], $item["task_description"], $item["task_status"], $item["task_time"], URL, $item["task_id"], URL, $item["task_id"], $item["task_list_id"]);
    }
?>
</ul>
<p><a href="<?= URL ?>todolist/createItem/<?= $id ?>">+ Toevoegen</a></p>

<script>
	var order = 'des';

function sortList() {
	var list, i, switching, b, c, shouldSwitch;
	list = document.getElementById("taskList");
	switching = true;
	/* Make a loop that will continue until
	no switching has been done: */
	while (switching) {
		// start by saying: no switching is done:
		switching = false;
		b = list.getElementsByTagName("p");
		c = list.getElementsByTagName("li");
		// Loop through all list-items:
		for (i = 0; i < (b.length - 1); i++) {
			// start by saying there should be no switching:
			shouldSwitch = false;
			/* check if the next item should
			switch place with the current item: */
			if (b[i].innerHTML.toLowerCase() < b[i + 1].innerHTML.toLowerCase() && order == 'des') {
				/* if next item is alphabetically
				lower than current item, mark as a switch
				and break the loop: */
				shouldSwitch = true;
				break;
			}
			else if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase() && order == 'asc') {
        		/* if next item is alphabetically
        		lower than current item, mark as a switch
        		and break the loop: */
        		shouldSwitch = true;
        		break;
			}
		}
		if (shouldSwitch) {
			/* If a switch has been marked, make the switch
			and mark the switch as done: */
			c[i].parentNode.insertBefore(c[i + 1], c[i]);
			switching = true;
		}
	}
	if (order == 'des') {
		order = 'asc'
	} else {
		order = 'des'
	}
}

function filterListStatus() {
    var input, filter, ul, li, p, i, txtValue;
    input = document.getElementById("inputStatus");
    filter = input.value.toUpperCase();
    ul = document.getElementById("taskList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        p = li[i].getElementsByTagName("p")[0];
        txtValue = p.textContent || p.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function filterListTime() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("inputTime");
    filter = input.value.toUpperCase();
    ul = document.getElementById("taskList");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h4")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>