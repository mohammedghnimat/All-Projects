const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", (e) => {
  e.preventDefault();

  const content = searchInput.value;

  const eventContainer = document.querySelector("pro-container");
  eventContainer.innerHTML = ""; // Clear the existing content

  const url = "http://brief333333/api/serverside/searchcategory.php";
  const dataToSend = {
    content: content,
  };

  const requestOptions = {
    method: "POST",
    body: JSON.stringify(dataToSend),
    headers: {
      "Content-Type": "application/json",
    },
  };
  fetch(url, requestOptions)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then((data) => {
      const eventContainer = document.getElementById("pro-container");
      data.forEach((category) => {
        const productRow = document.createElement("tr");
        productRow.className = "pro";

        productRow.innerHTML = `
        
          <td>${category.category_id}</td>
          <td>${category.category_name}</td>
          <td>
        
              <button "><a style = "text-decoration: none;color:white" href="update-even.html?id${category.category_id}">Edit</a></button>
              <button style ="margin-left:10px""><a style = "text-decoration: none;color:white;" href="http://localhost/singup/project/admin/deleteeven.php?id=${category.category_id}">Delete</a></button>
            </div>
          </td>
       
                `;
        eventContainer.appendChild(productRow);
      });
    })
    .catch((error) => {
      console.error("There was a problem with the fetch operation:", error);
    });
});
