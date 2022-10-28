let search_inp = document.querySelector("#search");
let input = document.querySelector("#idsearch");

search_inp.addEventListener("keyup", () => {
        fetch(`/searchapprenants/${input.value}/${search_inp.value}`, {
            method: "GET"
        }).then((res) => {
            return res.text();
        }).then((data) => {
            console.log(data);
            // document.getElementById('data').innerHTML = data;
            
        }
        )

    
}
)