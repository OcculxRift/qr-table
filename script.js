const url = "https://occul.ticketers.club/status";
const table = document.getElementById("table-body");

fetch(url)
  .then((response) => response.json())
  .then((data) => {
    data.forEach((row) => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${row[0]}</td>
        <td>${row[1]}</td>
        <td>${row[2]}</td>
        <td>${row[3]}</td>
      `;
      table.appendChild(tr);
    });
  })
  .catch((error) => console.error(error));
