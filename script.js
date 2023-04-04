async function fetchData() {
  const response = await fetch('https://occul.ticketers.club/status');
  const data = await response.json();
  return data;
}

async function displayData() {
  const data = await fetchData();

  const tableBody = document.getElementById('table-body');
  let rowNumber = 1;
  for (const item of data) {
    const row = document.createElement('tr');
    const numberCell = document.createElement('td');
    numberCell.textContent = rowNumber;
    row.appendChild(numberCell);

    const statusCell = document.createElement('td');
    statusCell.textContent = item[0];
    row.appendChild(statusCell);

    const nameCell = document.createElement('td');
    nameCell.textContent = item[1];
    row.appendChild(nameCell);

    const dateCell = document.createElement('td');
    const date = new Date();
    const options = { day: 'numeric', month: 'numeric', year: 'numeric' };
    dateCell.textContent = date.toLocaleDateString('ru-RU', options);
    row.appendChild(dateCell);

    tableBody.appendChild(row);
    rowNumber++;
  }
}

displayData();
