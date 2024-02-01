<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  <main>
<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <form  method="POST">
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="col-span-full">
            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>


          <div class="mt-2">
            <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Here's an idea for note.."></textarea>
          <div>
        </div>
      </div>
    </div>
    <div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-6">Submit</button>
    </div>
</div>
      
  </main>

  <?php require('partials/footer.php'); ?>