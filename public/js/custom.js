

document.getElementById('form_submit').addEventListener('click', function(e) {
    var st_name, st_class, st_roll;

    st_name = document.getElementById('st_name').value,
    st_class = document.getElementById('st_class').value,
    st_roll = document.getElementById('st_roll').value

    var url = "/data_insert";



    var myData = {name: st_name, class: st_class, roll: st_roll};

    axios.post( url, myData)
      .then(function (response) {
        console.log(response.data);

        document.getElementById('result').innerText = "data inserted";
      })
      .catch(function (error) {
        document.getElementById('result').innerText = "data insert faild";
      });


    e.preventDefault();
})

