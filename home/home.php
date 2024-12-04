<?php
include '../dbconnect.php';
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];

  $query = "INSERT INTO `feedback` ( `email`, `message`) VALUES ('$email', '$message')";
  if (mysqli_query($conn, $query)) {
    $noerror = "Message sent successfully";
  } else {
    $error = "Error: " . $query . "<br>" . mysqli_error($conn);
  }
}

mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    
    <link rel="icon" href="../images/clubconnect-logo.png" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Home</title>
</head>
<body>
    <div class="navbarheader animate__animated animate__fadeInDown  text-white">
        <div class="flex justify-center ">
            <div class="self-center top-0 w-full max-w-7xl ">
                <div class="flex justify-between items-center text-gray-700">
                    <div class="mx-2 my-4 ">
                      <div class=" md:w-1/6 overflow-hidden ">
                        <img src="../images/clubconnect-logo.png" alt="" class="" />
                      </div>
                    </div>
                    <ul class="hidden md:flex items-center text-[18px] font-semibold pr-10">
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="home.php">Home</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="../dashboard/dashboard.php">
                                Dashboard</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a href="clubs.php">Clubs</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="notice.php">Notices</a></li>
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                href="contact.php">Contact</a></li>
                        <!-- <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3"><a href="login.html">Sign out</a></button> -->
                        <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                          href="../index.php">Signout</a></li>
                        <!-- <li
                            class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                            <a href="#">LogIn</a></li>
                        <li
                            class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                            <a href="#">SignUp</a></li> -->
                    </ul> <button class="block p-3 mx-10 md:hidden hover:bg-gray-200 rounded-xl group ">
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600 mb-[2px]"></div>
                        <div class="w-5 my-[3px] h-[3px] bg-gray-600"></div>
                        <div
                            class="absolute top-0 -right-full opacity-0 h-screen w-[60%] border bg-white group-focus:right-0 group-focus:opacity-100 transition-all ease-in duration-300 ">
                            <ul class="flex flex-col items-center text-[18px] pt-[60px]">
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Home</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">About Us</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Our Services</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Portfolio</a></li>
                                <li class="text-stone-600 hover:text-blue-600 hover:font-bold font-medium mx-4 my-1"><a
                                        href="#">Contact</a></li>
                                <!-- <li
                                    class="text-blue-600 hover:text-white hover:bg-blue-600 mx-4 my-1 border-2 border-blue-600 px-2 rounded-2xl ">
                                    <a href="#">LogIn</a></li>
                                <li
                                    class="text-white bg-blue-600 px-2 rounded-2xl mx-4 my-1 hover:bg-white hover:text-blue-600 hover:border-2 hover:border-blue-600">
                                    <a href="#">SignUp</a></li> -->
                            </ul>
                        </div>
                    </button>
                </div>
                
            </div>
           </div>
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
           <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
           <script nomodule src="../images/clubconnect-logo.png"></script> 
    </div>

    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed1.webp" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">Nov 04, 2024</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">MIT-WPU Shines on the International Stage!</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#"> We are happy to share that MIT-WPU’s Chem E Car team represented India at the ASC 2024 in San Diego, competing in the renowned Chem E Car competition.

This unique event challenges teams to design cars powered solely by chemical reactions for both movement and stopping—pushing innovation and scientific knowledge to new heights.

Adding to the pride, MIT-WPU was honored with the Outstanding Student Chapter Award for the 6th consecutive year by the American Institute of Chemical Engineers. This international recognition reflects our students’ commitment to excellence, creativity, and leadership in the field.

Congratulations to the entire team for showcasing India’s talent and dedication on a global platform!  <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?boy" alt=""
                                            class=" rounded-full" /> </div> -->
                                            <div class="grid m-1">
                                        
                                        <div class=" text-sm hover:text-gray-600"> Nov 05, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed2.webp" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">Sep 21, 2024</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">AWS Student Community Day Pune 2024 at MIT-WPU: A Day of Cloud Innovation and Learning </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">
                                On 21st September 2024, MIT World Peace University (MIT-WPU) played host to the AWS Student Community Day (SCD) Pune edition, an event that united over 500 cloud enthusiasts, industry experts, and aspiring technologists. In collaboration with AWS Cloud Club at MIT-ADTU, the event was a vibrant platform for students from various institutions to explore the future of cloud computing through hands-on experiences, inspiring keynotes, and interactive sessions.

AWS SCD 2024 was more than just a learning opportunity; it was a celebration of the innovation and community spirit driving the student-led cloud computing movement. The event provided a unique space for attendees to connect, collaborate, and engage with the transformative power of AWS technologies, all while gaining practical skills for their future careers.<div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?girl" alt=""
                                            class=" rounded-full" /> </div> -->
                                            <div class="grid m-1">
                                        
                                        <div class=" text-sm hover:text-gray-600"> Sep 22, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed3.webp" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">Aug 12, 2024</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">Social Leadership Development Program (SLDP)</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">The Social Leadership Development Program (SLDP) 2024 at MIT World Peace University was a compelling three-day event held from August 12th to 14th, dedicated to nurturing the next generation of social leaders. This program aimed to equip first-year students with the skills and insights necessary to drive meaningful change in their communities and beyond. The event brought together a distinguished group of speakers from various fields who shared their experiences and inspired the students to embrace social leadership.

                                </a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?man" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        
                                        <div class=" text-sm hover:text-gray-600"> Aug 13, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img class="animate__animated animate__fadeInUp" src="../images/feed4.webp" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <!-- <div class="m-1 font-bold">Vlog,</div> -->
                                    <div class="m-1">Aug 20, 2024 </div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">
                                R.I.D.E 2024 : Five Days of Innovation, Research, and Entrepreneurship at MIT-WPU</div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">R.I.D.E (Research, Innovation, Design, and Entrepreneurship) is the flagship event of MIT-WPU that took place from August 20th to 24th, 2024, where innovators, researchers, entrepreneurs, and students come together to exchange cutting-edge ideas and drive sustainable solutions. This event is more than just a conference—it's a dynamic platform that fosters research and creativity, inspiring the next generation of change-makers. Through a series of keynote addresses, research presentations, and panel discussions, R.I.D.E at MIT-WPU nurtures a spirit of innovation and entrepreneurship. </a></div>
                                <div class="flex cursor-pointer">
                                    <!-- <div class="m-2"> <img src="https://source.unsplash.com/50x50/?woman" alt=""
                                            class=" rounded-full" /> </div> -->
                                    <div class="grid m-1">
                                        
                                        <div class=" text-sm hover:text-gray-600">Aug 21, 2024</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>
    <!-- <div class="posts animate__animated animate__fadeInUp">
        <div class="flex justify-center">
            <div class="flex flex-col justify-center">
                <div class="flex flex-col md:flex-row max-w-7xl justify-center items-center ">
                    <div class="overflow-hidden w-full m-4 shadow-sm flex flex-col md:flex-row justify-center">
                        <div class="flex flex-col md:flex-row items-center">
                            <div class=" w-full overflow-hidden"> <img src="https://source.unsplash.com/700x350/?dance" alt=""
                                    class="" /> </div>
                            <div class="md:w-2/3 m-4 ">
                                <div class="flex text-gray-500 text-sm m-2">
                                    <div class="m-1 font-bold">Vlog,</div>
                                    <div class="m-1">31 March, 2023</div>
                                </div>
                                <div class="font-bold text-black text-xl m-2">The 8 Best City Lights In The World! </div>
                                <div class="text-sm text-gray-500 mt-4 m-2"><a href="#">There's something about city lights that
                                        make them so captivating and romantic. Maybe it's because they remind us of all the
                                        possibilities that exist in the world, or maybe it's because they're just so darn pretty
                                        to look at.
        
                                        No matter what the reason is, there's no denying that city lights are some of the most
                                        beautiful things in the world.</a></div>
                                <div class="flex cursor-pointer">
                                    <div class="m-2"> <img src="https://source.unsplash.com/50x50/?lady" alt=""
                                            class=" rounded-full" /> </div>
                                    <div class="grid m-1">
                                        <div class="font-bold text-sm hover:text-gray-600 mt-2">Belen J. Cherry</div>
                                        <div class=" text-sm hover:text-gray-600">Greenville, NC 27858</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://use.fontawesome.com/03f8a0ebd4.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div> -->

    <div class="div animate__animated animate__fadeInUp">
        <form class="text-gray-600 body-font relative" action="" method="post">
            <div class="absolute inset-0 bg-gray-300">
              <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.246583574414!2d73.81253627542834!3d18.51775588257527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfb9e53a05f9%3A0x2be5e8da02be693e!2sMIT%20World%20Peace%20University%20(MIT-WPU)!5e0!3m2!1sen!2sin!4v1732466917755!5m2!1sen!2sin" style="filter: grayscale(3) contrast(1.2) opacity(0.4);"></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
              <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">"Continuous improvement is better than delayed perfection" – Mark Twain</p>
                <div class="relative mb-4">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email"  required class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" required name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <input type="submit" name="submit" required class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="SUBMIT" />
              </div>
            </div>
          </form>

    </div>
<hr>
<hr>
<div class="footer">

    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <img src="../images/clubconnect-logo.png" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="19 16 24 24" />
                <!-- <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path> -->
              
              <span class="ml-3 text-xl">MIT</span>
            </a>
            <p class="mt-2 text-sm text-gray-500">MIT WPU, Club membership management</p>
          </div>
          <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
            <div class="lg:w-3/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CONTACT US</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">MIT World Peace University <br>
Paud Road, Kothrud <br>
</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">College Phone: 0123456789</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Admission Cell: +91 9876543210</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Email: clubconnect01@gmail.com</a>
                </li>
              </nav>
            </div>
            <!-- <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
              <nav class="list-none mb-10">
                <li>
                  <a class="text-gray-600 hover:text-gray-800">First Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                </li>
                <li>
                  <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                </li>
              </nav>
            </div> -->
           
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <!-- <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Tailblocks —
              <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@knyttneve</a>
            </p> -->
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a class="text-gray-500" href="https://www.facebook.com/aietmijar/">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://twitter.com/aietmoodbidri">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href=" https://www.instagram.com/alvasengineeringofficial/">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a class="ml-3 text-gray-500" href="https://www.linkedin.com/school/aietmijar/">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
        </div>
      </footer>
</div>

</body>
</html>