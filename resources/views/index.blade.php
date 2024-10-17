<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-danger pt-4">Date Filters in Laravel</h1>
        <hr>
        <div class="row py-2">
            <div class="col-md-6">
                <h2>List of Employees</h2>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="date_filter">Filter by Date</label>
                    <form action="{{ route('employees.index') }}"  method="get">
                        <div class="input-group">
                            <select name="date_filter" id="date_filter" class="form-select">
                                <option value="">All Date</option>
                                <option value="today"> Today</option>
                                <option value="yesterday">Yesterday</option>
                                <option value="this_week">This Week</option>
                                <option value="last_week">Last Week</option>
                                <option value="this_month">This Month</option>
                                <option value="last_month">Last Month</option>
                                <option value="this_year">This Year</option>
                                <option value="last_year">Last Year</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Last Name </th>
                    <th>Gender </th>
                    <th>Position </th>
                    <th>Email</th>
                    <th>Date Created</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->gender }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>