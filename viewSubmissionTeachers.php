<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .input {
            width: 80px;
        }

        .blue-bg {
            background-color: #394989;
        }

        input[type=submit].blue-bg:hover, button.blue-bg:hover {
            background-color: #fddb3a;
        }

        .yellow-bg {
            background-color: #fddb3a;
        }

        .black-bg {
            background-color: #222;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-1 w-100">
        <div class="row">
            <!--   SideNav    -->
            <nav class="col-md-3 col-lg-2 d-md-blockbg-light sidebar-collapse border-right">
                <div class="sidebar-sticky pt-3">

                    <h4
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Teachers</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h4>
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">
                        <span>Class</span>
                        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                </div>
            </nav>
            <!--   SideNav    -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Submissions</h1>
                    <button class="align-self-end btn blue-bg mb-1 text-white">Logout</button>
                </div>

                <div class="container-fluid">



                    <table class="table table-striped table-hover">
                        <thead class="blue-bg text-white">
                            <tr>
                                <th scope="col">Roll Number</th>
                                <th scope="col">Name</th>
                                <th scope="col">Subject</th>
                                <th scope="col" colspan="2" class="text-center">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>Science</td>
                                <form action="#" onsubmit="sayHello()">
                                    <td class="input"><input type="text" name="marks" value="" class="form-control"
                                            placeholder="Add marks here" required /></td>
                                    <td class="input"><input type="submit" value="Submit"
                                            class="btn blue-bg text-white"></td>
                                </form>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane Doe</td>
                                <td>Maths</td>
                                <form action="#" onsubmit="sayHello()">
                                    <td class="input"><input type="text" name="marks" value="" class="form-control"
                                            placeholder="Add marks here" required /></td>
                                    <td class="input"><input type="submit" value="Submit"
                                            class="btn blue-bg text-white"></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>




            </main>
        </div>
    </div>
    <script>
        function sayHello() {

            alert('Marks Recorded');
        }
    </script>

</body>

<<<<<<< HEAD

=======
>>>>>>> ea97da44255d48dde39b35e4664b56039315b4a5
</html>




<!--
 <article class='container  h-100 bg-secondary'  id="side_nav">
        <div class="container">
            <h1>Teacher</h1>
            <h3>NAME_OF_TEACHER</h3>
        </div>
    </article>
    <main>
<<<<<<< HEAD

    </main>-->
=======
        
    </main>-->
>>>>>>> ea97da44255d48dde39b35e4664b56039315b4a5
