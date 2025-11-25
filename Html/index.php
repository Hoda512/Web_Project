<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Categories</title>

    <style>
        table {
            width: 70%;
            margin: 40px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #333;
            padding: 12px;
            text-align: center;
        }
        img {
            width: 120px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">All Categories</h2>

<table id="categoryTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>

<script>
    fetch("../Php/Category/ShowCategory.php")
        .then(response => response.json())
        .then(data => {

            let tableBody = document.querySelector("#categoryTable tbody");

            data.forEach(cat => {
                let row = `
                    <tr>
                        <td>${cat.Cate_Id}</td>
                        <td>${cat.Cate_Name}</td>
                        <td><img src='../UploadsForCategory/${encodeURIComponent(cat.Img)}' width="120" /></td>
                        <td>
                            <a href="edit_category.php?id=${cat.Cate_Id}">Edit</a> |
                            <a href="delete_category.php?id=${cat.Cate_Id}" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                `;

                tableBody.innerHTML += row;
            });
        });
      console.log(cat.Img);


</script>


</body>
</html>
