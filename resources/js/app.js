import "./bootstrap";

window.addEventListener("DOMContentLoaded", function () {
  listCompanies();
  editCompany();
});

function listCompanies() {
  const table = document.getElementById("companyTable");
  if (!table) {
    return;
  }
  let dtTable = new DataTable("#companyTable", {
    scrollY: "600px",
    rowId: "id",
    scrollX: true,
    responsive: true,
    order: [[6, "asc"]],
    ajax: {
      url: "/companies/all",
      dataSrc: "data",
    },
    columns: [
      {
        data: "id",
        name: "id",
        sortable: false,
        orderable: false,
        render: function (data, type, row) {
          return `
          <div class="btn-group" role="group" aria-label="Group actions button">
            <a class="btn btn-secondary btn-sm d-flex items-center justify-center" href="/companies/${data}">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
              </svg>
            </a>
            <a class="btn btn-primary btn-sm d-flex items-center justify-center" href="/companies/${data}/edit">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
              </svg>
            </a>
            <a class="btn btn-danger btn-sm d-flex items-center justify-center" href="javascript:void(0)" onclick="deleteCompany(${data})">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        `;
        },
      },
      { data: "nit" },
      { data: "name" },
      { data: "address" },
      {
        data: "phone",
        render: function (data, type, row) {
          return `<span class="whitespace-nowrap">${data}</span>`;
        },
      },
      {
        data: "active",
        render: function (data, type, row) {
          const isActive = data ? "Yes" : "No";
          const classes = data ? "badge badge-success" : "badge badge-danger";
          return `<span class="${classes}">${isActive}</span>`;
        },
      },
      {
        data: "created_at",
        render: function (data, type, row) {
          const date = new Date(data);
          return `<span class="whitespace-nowrap">${date.toLocaleString()}</span>`;
        },
      },
      {
        data: "updated_at",
        render: function (data, type, row) {
          const date = new Date(data);
          return `<span class="whitespace-nowrap">${date.toLocaleString()}</span>`;
        },
      },
    ],
  });
}

async function editCompany() {
  const form = document.getElementById("form-edit");
  if (!form) {
    return;
  }
  let notyf = new Notyf();
  const fetching = (form) => {
    const formData = new FormData(form);
    return fetch(form.action, {
      headers: {
        Accept: "application/json",
      },
      method: form.method,
      body: formData,
    })
      .then(function (response) {
        return response.json();
      })
      .then(function (data) {
        return data;
      })
      .catch(function (error) {
        console.error(error);
        notyf.error("Error al guardar la empresa");
      });
  };
  form.addEventListener("submit", async function (event) {
    event.preventDefault();
    try {
      const response = await fetching(form);
      const hasErrors = response.hasOwnProperty("errors");
      if (hasErrors) {
        notyf.error(response.message);
        return;
      }
      if (response.success) {
        notyf.success(response.message);
        window.location.href = "/companies/";
      }
    } catch (error) {
      notyf.error(error);
    }
  });
}
