<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="card-body pb-0">
        <h5 class="card-title">Category List</h5>

        <table>
            <thead>
                <tr>
                    
                    <th scope="col">Name</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                       
                        <td>{{ $category->name }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>