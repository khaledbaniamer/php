
async function laodData(){
    
    var jsonData = await fetch('api.php');
    var allData = await jsonData.json();
    console.log(allData);

    for(let i = 0 ; i < allData.length ; i++){

     document.getElementById("showData").innerHTML +=`
        <tr>
                <td>${ allData[i].id }</td>
                <td>${ allData[i].first_name }</td>
                <td>${ allData[i].last_name }</td>
                <td>${ allData[i].age }</td>
        </tr>
        `;
    }


    const search = document.getElementById("search");
    const searchInput = document.getElementById("get_id");
    const showSearchId = document.getElementById("showSearchResult");
    
    search.addEventListener("click" , function(e){
        e.preventDefault();
        var id = searchInput.value-1;
        // console.log(id);
    
        document.getElementById("showSearchResult").innerHTML =`
        <tr>
                <td>${ allData[id].id }</td>
                <td>${ allData[id].first_name }</td>
                <td>${ allData[id].last_name }</td>
                <td>${ allData[id].age }</td>
        </tr>
        `;
    
    })
}
laodData();




