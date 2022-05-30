async function laodData(){
    
    const jsonData = await fetch('api.php');
    const allData = await jsonData.json();
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
}

laodData();

