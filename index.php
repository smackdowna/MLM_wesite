<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLM Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="timer.js"></script>
    <link rel="stylesheet" href="utils.css">
</head>

<body class='overflow-x-hidden'>
    <div class="container mx-auto">
        <header>
            <nav class="flex justify-between">
                <div class="logo font-bold flex items-center text-blue">MLM Website</div>
                <ul class="navbar flex items-center">
                    <li>Home</li>
                    <li>About</li>
                    <a href='login_user.php'><li>User</li></a>
                    <a href='admin/index.php' ><li>Admin</li></a>
                    
                </ul>
            </nav>
            <hr>
        </header>
        <main class="min-h-screen">
            <section class="section1">
                <div class="flex">
                    <div class="topleft flex flex-col justify-center px-2">
                        <div class=" text-center">
                            <img class="dumbellimg" src="download.png" alt="">
                        </div>
                        <h1 class="my-1 text-center">You can’t build a business bigger than yourself</h1>
                        <p class=" text-center">Multilevel marketing is a legitimate business strategy used by some direct sales companies to sell products and 
                                services. Existing members are encouraged to promote and sell their offerings to other individuals 
                                and bring on new recruits into the business. Participants are paid a percentage of their recruits' 
                                sales.</p>
                            <!-- Display the countdown timer in an element -->
                            
                            <div class="buttons">
                               <!-- <button class="btn">Join now</button>
                                <button class="btn">Contact Us</button> -->
                            </div>
                    </div>
                    <div class="topright flex justify-center">
                        <img class="gymimg" src="mlm.jpg" alt="">
                    </div>
                </div>
            </section>
            <hr>
            <section class="section2">
                <h1 class="text-center my-2">Pricing</h1>
                <p class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis provident
                    suscipit temporibus modi voluptatem. Assumenda aspernatur ad nihil quasi expedita eligendi atque?
                    Dolorum eum deserunt dicta iste beatae commodi, doloribus expedita hic recusandae, tempora illum
                    consequuntur? Necessitatibus voluptate animi repellendus reiciendis!</p>
                <div class="boxes flex justify-center">
                    <div class="box">
                        <h2>Free</h2>
                        <ul>
                            <li class="highlighted">₹0/month</li>
                            <li>0 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Pro</h2>
                        <ul>
                            <li class="highlighted">₹150/month</li>
                            <li>0 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Enterprise</h2>
                        <ul>
                            <li class="highlighted">₹500/month</li>
                            <li>0 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>

                </div>
            </section>
            <hr>
            <section class="section3">
                <h1 class="text-center my-2">Compare Plans</h1>
                <div class="container plantable">
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th></th><th>Free</th>
                          <th>Pro</th>
                          <th>Enterprise</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Public</th>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Private</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                      </tbody>
              
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Permissions</th>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Sharing</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Unlimited members</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Extra security</th>
                          <td>-</td>
                          <td>-</td>
                          <td>Yes</svg></td>
                        </tr>
                      </tbody>
                    </table>
            </section>
            <hr>
        </main>
        <footer>
            Copyright &copy; MLM.com | All rights reserved
        </footer>

    </div>
</body>

</html>