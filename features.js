

function myFunction(id, rowid) {
    var table = document.getElementById(id);
    var count = document.getElementById(id).rows[0].cells.length;
    var cellname = Array()
    //alert(count)
    for(var i=0; i<count; i++){
         cellname.push(table.rows[1].cells[i].childNodes[0].name);
    }
    var row = table.insertRow(-1);
    for(var i=0; i<count; i++){
        //alert(cell)
        var cell = row.insertCell(i);
        var val = table.rows[1].cells[i].childNodes[0].value;
        cell.innerHTML = val + '<input type="hidden"  name="' + cellname[i] + '[]" value="' + val +'"></input>';
        table.rows[1].cells[i].childNodes[0].value = "";
        
    }
    cell.innerHTML = "Will be added...";
  }

  function delRow(rowid, table){
      debugger;
        $.ajax({
          url:"delrec.php", //the page containing php script
          type: "post", //request type,
          dataType: 'json',
         data: {status: "success", rowid: rowid, table: table},
          success:function(result){
           console.log(result.status);
           return "deleted";
         }
         
       });
      
  
  }
