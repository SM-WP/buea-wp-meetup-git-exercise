<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile CV Card</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex justify-center items-center min-h-screen">

<?php
  $profileImage = "images/YEMELE.php";
?>

<div class="w-[900px] bg-white shadow-2xl rounded-lg overflow-hidden">

  <!-- TOP SECTION -->
  <div class="bg-[#2f4a7a] text-white p-10 flex items-center gap-10">

    <!-- Profile Image -->
    <div class="relative">
      <div class="w-40 h-40 rounded-full border-[6px] border-yellow-400 overflow-hidden">
        
        <img src="<?php echo plugin_dir_url(__FILE__) . 'images/YEMELE.jpeg'; ?>" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- Name + Title -->
    <div class="flex-1">
      <h1 class="text-3xl tracking-widest font-bold">BRENDALINE</h1>
      <h2 class="text-4xl font-bold text-yellow-400 tracking-wide">MESSE</h2>

      <div class="mt-3 inline-block bg-yellow-400 text-[#2f4a7a] px-4 py-1 text-sm font-semibold tracking-wider">
        SOFTWARE ENGINEER
      </div>

      <p class="mt-4 text-sm text-gray-200 max-w-xl">
        I am an aspiring software engineer student with a foundation in React, TypeScript, and Tailwind
CSS, passionate about building scalable, user-centered web applications. Experienced in designing
and gradually moving towards full stack development
      </p>

      <div class="mt-4 flex gap-6 text-sm text-gray-200">
        <span>Tel: +237 651 138 159</span>
        <span>Email: yemeleline2@gmail.com</span>
      </div>
    </div>
  </div>

  <!-- BOTTOM SECTION -->
  <div class="grid grid-cols-2">

    <!-- LEFT COLUMN -->
    <div class="bg-[#1f3560] text-white p-10 space-y-10">

      <!-- Education -->
      <div>
        <h3 class="text-yellow-400 font-bold tracking-widest mb-4">EDUCATIONS</h3>

        <div class="text-sm space-y-4">
          <div>
            <p class="font-semibold"> Level two Software engineering student</p>
            <p class="text-gray-300">University of Buea Cameroon <span class="font-bold ">present</span>  (2026)</p>
          </div>

          <div>
            <p class="font-semibold"> GCE Advanced level (science)</p>
            <p class="text-gray-300">GBHS Penka Michel – West Cameroon. (2024)</p>
          </div>
        </div>
      </div>

      <!-- References -->
      <div>
        <h3 class="text-yellow-400 font-bold tracking-widest mb-4">ACHIEVEMENTS</h3>

        <div class="text-sm space-y-3">
          <p>Certificate of completion 2025 - Graphics</p>
          <p>Certificate of completion 2021 - Microsoft office</p>
        </div>
      </div>
    </div>

    <!-- RIGHT COLUMN -->
    <div class="bg-gray-100 p-10 space-y-10">

      <!-- Experience -->
      <div>
        <h3 class="text-[#2f4a7a] font-bold tracking-widest mb-4">EXPERIENCES</h3>

        <div class="text-sm space-y-4">
          <div>
            <p class="font-semibold">Genior Graphic Designer</p>
            <p class="text-gray-600">Coffee special media post using photoshoot </p>
          </div>

          <div>
            <p class="font-semibold">Genior Web Developer</p>
            <p class="text-gray-600">Profile card, using HTML and CSS</p>
             <p class="text-gray-600">Mboakako website during my internship</p>
          </div>
        </div>
      </div>

      <!-- Skills -->
      <div>
        <h3 class="text-[#2f4a7a] font-bold tracking-widest mb-4">MY SKILLS</h3>

        <div class="space-y-4 text-sm">

          <!-- Skill -->
          <div>
            <div class="flex justify-between mb-1">
              <span>SEO</span><span>50%</span>
            </div>
            <div class="w-full bg-gray-300 h-2 rounded">
              <div class="bg-yellow-400 h-2 rounded w-[50%]"></div>
            </div>
          </div>

          <div>
            <div class="flex justify-between mb-1">
              <span>Public Speaking</span><span>85%</span>
            </div>
            <div class="w-full bg-gray-300 h-2 rounded">
              <div class="bg-yellow-400 h-2 rounded w-[85%]"></div>
            </div>
          </div>

          <div>
            <div class="flex justify-between mb-1">
              <span>Negotiation</span><span>80%</span>
            </div>
            <div class="w-full bg-gray-300 h-2 rounded">
              <div class="bg-yellow-400 h-2 rounded w-[80%]"></div>
            </div>
          </div>

          <div>
            <div class="flex justify-between mb-1">
              <span>Teamwork</span><span>95%</span>
            </div>
            <div class="w-full bg-gray-300 h-2 rounded">
              <div class="bg-yellow-400 h-2 rounded w-[95%]"></div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

</body>
</html>