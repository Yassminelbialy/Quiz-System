console.log("GAqqqAAAAAAAAAG");
$(".deletebtn").on("click",function(){
    console.log("GGGGGGGGGGGGGGGffffdddGGGGGGGGGGGGGG");

	console.log(this.id);
	let selectedUser=this.id;
    let currentRow=this;
	 $.ajax({
        type: 'POST',
        url: "../../../Controllers/AnswerController.php",
        data: {
            "ansID": selectedUser,
        },
        success: function (result) {
            if(result == "success")
            {
                console.log($(currentRow));
               $(currentRow).parents("tr").remove(); 
            }
            
        },
        error: function (xhr, status, message) {
            console.log(status + ' ' + message);
        }
    }); //end of aj
});

