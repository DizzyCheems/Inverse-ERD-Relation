<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <style>
        .search-form{
	color: #999;	
}

#search {
	width: 150px;
}

#contacts,
#organisations {
	margin-top: 10px;
	display: none;
}
    </style>
</head>

<body>
	<div class="search-form">
	<div>
		<select id="search" name="state">
			<option value="" class="selected">Select search category</option>
      <option value="organisations">Practice</option>
			<option value="contacts">Practitioner</option>
    </select>
	</div>

	<div id="contacts"> <em>Who are you looking for?</em>
		<select>
      <option value="item1">GP</option>
      <option value="item2">Allied Health</option>
      <option value="item3">Specialist</option>
    </select>
	</div>

	<div id="organisations"> <em>What type of practice are you looking for?</em>
		<select>
			<option value="item1">General Practice</option>
      <option value="item2">Allied Health Practice</option>
      <option value="item3">Medical Specialist Practice</option>
    </select>
	</div>

	</div>
    <script>
                $(document).ready(function() {
					
                    $("#search").change(function(e) {
                           hideAll();
                                $(e.target.options).removeClass();
                                var $selectedOption = $(e.target.options[e.target.options.selectedIndex]);
                                $selectedOption.addClass('selected');
                           $('#' + $selectedOption.val()).show();
                    });
                });
        
                function hideAll() {
                    $("#contacts").hide();
                    $("#organisations").hide();
                            
                }
    </script>
</body>