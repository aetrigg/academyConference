function initApp(){
    //this is grabbing the JSON file
    $.getJSON("data/data.json", function(result){
        console.log(result.lists);
        let listArray = result.lists;

        $.each(listArray, function(idx, listName){
            $("#jsonList").append(
                `<div class="individualSpeaker">
                    <div class="individualSpeakerImg">
                        <img src="${listName.picture}">
                    </div>
                    <div class="individualSpeakerText">
                        <p class="name"><b>${listName.name}</b></p>
                        <p>${listName.description}</p>
                    </div>
                </div>`
            )
        })
    })
}

$(document).ready(function(){
    initApp();
})