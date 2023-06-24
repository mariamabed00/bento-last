-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 11:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bento`
--

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `id` int(50) NOT NULL,
  `period` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(100) NOT NULL,
  `date` year(4) NOT NULL,
  `code` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `premium`
--

INSERT INTO `premium` (`id`, `period`, `name`, `number`, `date`, `code`, `zip`) VALUES
(1, 'month', 'alice mentor', 2147483647, 0000, '1458u92tw28', 14154),
(2, 'year', 'alex james', 12976543, 2024, '1248654657', 985634);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(4500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`) VALUES
(1, 'Gluten Free Pancakes', '1. In a mixing bowl, whisk together 1 cup of gluten-free oat flour, 1/2 cup of vanilla protein powder, 1 teaspoon of baking powder, and 1/4 teaspoon of salt until well combined.\r\n2. In a separate bowl, whisk together 1 cup of unsweetened almond milk (or any dairy-free milk), 2 large eggs, 1 tablespoon of maple syrup (or honey), and 1 teaspoon of vanilla extract until well combined.\r\n3. Pour the wet ingredients into the dry ingredients and stir until a smooth batter forms. Let the batter sit for a few minutes to thicken.\r\n4. Preheat a non-stick skillet or griddle over medium heat.\r\n5. Lightly grease the skillet with cooking spray or melted coconut oil.\r\n6. Pour 1/4 cup of batter onto the skillet for each pancake. Cook until bubbles form on the surface, then flip and cook the other side until golden brown.\r\n7. Repeat step 6 with the remaining batter, adjusting the heat if necessary, until all the pancakes are cooked.\r\n8. Serve the protein pancakes warm with your favorite toppings such as fresh berries, sliced bananas, or a drizzle of nut butter.\r\nEnjoy your perfect gluten-free protein pancakes! They are a delicious and nutritious breakfast option packed with protein.\r\n', '78.jpg'),
(2, 'Muffin tin with liners or greased cups', '1. Preheat the oven to 350°F (175°C) and prepare a muffin tin with liners or greased cups.\r\n2. In a large mixing bowl, combine gluten-free flour blend, granulated sugar, baking powder, baking soda, salt, poppy seeds, and lemon zest.\r\n3. In a separate bowl, mix together lemon juice, almond milk, melted coconut oil, eggs, and vanilla extract.\r\n4. Pour the wet ingredients into the dry ingredients and stir until just combined.\r\n5. Divide the batter evenly among the muffin cups, filling them about 3/4 full.\r\n6. Bake for 18-20 minutes, or until a toothpick inserted into the center comes out clean.\r\n7. Let the muffins cool in the pan for a few minutes, then transfer to a wire rack to cool completely.\r\n8. In a small bowl, mix softened coconut butter, maple syrup, and lemon juice until smooth.\r\n9. Once the muffins are cooled, drizzle or spread the coconut butter icing on top of each muffin.\r\n10. Optional: Garnish with additional lemon zest.\r\nEnjoy your gluten-free lemon poppy seed muffins with coconut butter icing!', '86.jpg'),
(3, 'Gluten-Free Apple Crisp', '1. Preheat your oven to 350°F (175°C).\r\n2. In a large bowl, combine the sliced apples, lemon juice, granulated sugar, cinnamon, and nutmeg. Toss to coat the apples evenly with the mixture.\r\n3. Transfer the apple mixture to a greased 9-inch baking dish, spreading it out in an even layer.\r\n4. In a separate bowl, combine the gluten-free oats, gluten-free flour blend, and packed brown sugar.\r\n5. Add the cold unsalted butter (or dairy-free alternative) to the bowl with the dry ingredients. Use your hands or a pastry cutter to mix the butter into the dry ingredients until the mixture resembles coarse crumbs.\r\n6. Sprinkle the crumb mixture evenly over the apples in the baking dish.\r\n7. Optional: Sprinkle chopped nuts (such as walnuts or pecans) over the crumb topping.\r\n8. Place the baking dish in the preheated oven and bake for about 35-40 minutes, or until the topping is golden brown and the apples are tender.\r\n9. Remove the apple crisp from the oven and let it cool for a few minutes.\r\n10. Serve the gluten-free apple crisp warm, optionally with a scoop of vanilla ice cream or whipped cream on top.\r\nEnjoy your delicious gluten-free apple crisp!', '83.jpg'),
(4, 'Delicious Gluten-Free Cranberry Orange coffee Cake', '1. Preheat the oven to 350°F (175°C) and grease a round or square baking pan.\r\n2. In a medium bowl, whisk together 2 cups of gluten-free flour blend, 1 teaspoon of baking powder, 1/2 teaspoon of baking soda, and 1/4 teaspoon of salt.\r\n3. In a large mixing bowl, cream together 1/2 cup of softened unsalted butter (or dairy-free alternative) and 3/4 cup of granulated sugar until light and fluffy.\r\n4. Beat in 2 large eggs, one at a time, ensuring each egg is fully incorporated before adding the next.\r\n5. Add 1 teaspoon of vanilla extract, the zest of 1 orange, and 1 cup of plain yogurt (or dairy-free alternative) to the butter and sugar mixture. Mix well.\r\n6. Gradually add the dry mixture to the wet ingredients, stirring until just combined.\r\n7. Gently fold in 1 cup of chopped fresh cranberries.\r\n8. Pour the batter into the greased baking pan and spread it evenly.\r\n9. Bake in the preheated oven for 40-45 minutes, or until a toothpick inserted into the center comes out clean.\r\n10. Remove the coffee cake from the oven and let it cool in the pan for about 10 minutes.\r\n11. Transfer the coffee cake to a wire rack to cool completely.\r\n12. Optional: Dust the top of the cooled coffee cake with powdered sugar.\r\n13. Slice and serve the gluten-free cranberry orange coffee cake.', '74.jpg'),
(5, 'Gluten-Free Nutella ', '1. Gather your ingredients: hazelnuts and gluten-free chocolate.\r\n2. Preheat your oven to 350°F (175°C).\r\n3. Spread the hazelnuts in a single layer on a baking sheet.\r\n4. Place the baking sheet with the hazelnuts in the preheated oven and toast them for about 10-12 minutes, or until the skins start to crack and peel off.\r\n5. Remove the hazelnuts from the oven and let them cool slightly.\r\n6. Once the hazelnuts have cooled a bit, rub them with a clean kitchen towel or between your palms to remove as much of the skin as possible. It\'s okay if a little bit of skin remains.\r\n7. Place the skinned hazelnuts in a food processor or high-speed blender.\r\n8. Process the hazelnuts until they turn into a smooth paste. This may take a few minutes, and you may need to scrape down the sides of the processor or blender as needed.\r\n9. In a microwave-safe bowl or double boiler, melt the gluten-free chocolate until smooth.\r\n10. Add the melted chocolate to the hazelnut paste in the food processor or blender.\r\n11. Blend the mixture again until the chocolate is fully incorporated and the Nutella reaches a smooth consistency.\r\n12. Transfer the gluten-free Nutella to a clean, airtight jar or container.\r\nYour gluten-free Nutella is ready to be enjoyed! Use it as a spread on gluten-free bread, pancakes, waffles, or as an ingredient in various desserts.', '73.jpg'),
(6, 'Lactose-Free Zucchini Coffee Cake  ', '1. Preheat your oven to the recommended temperature, typically around 350 ° F (175 ° C), and grease a baking dish or line it with parchment paper.\r\n2. Gather the ingredients: You will need grated zucchini, whole wheat flour or a gluten-free flour alternative, almond flour, baking powder, baking soda, cinnamon, nutmeg, salt, eggs (or flax eggs for a vegan option), unsweetened applesauce, maple syrup or a natural sweetener of your choice, vanilla extract, and chopped nuts or seeds for topping (optional).\r\n3. In a large bowl, combine the dry ingredients: whole wheat flour or gluten-free flour, almond flour, baking powder, baking soda, cinnamon, nutmeg, and salt. Mix well.\r\n4. In another bowl, whisk the eggs (or prepare flax eggs as per instructions) and add in the grated zucchini, unsweetened applesauce, maple syrup, and vanilla extract. Stir until well combined.\r\n5. Pour the wet ingredients into the bowl of dry ingredients. Mix gently until all the ingredients are very incorporate.', '2.jpg'),
(7, 'Black Raspberry Ice Cream (Dairy-Free)', '1. Blend 2 cups of black raspberries until smooth.\r\n2. Strain the mixture to remove the seeds.\r\n3. Whisk together 1 can of full-fat coconut milk, 1/4 cup maple syrup or agave nectar, and 1 teaspoon vanilla extract.\r\n4. Combine the strained raspberry puree with the coconut milk mixture.\r\n5. Adjust sweetness to taste.\r\n6. Churn the mixture in an ice cream maker until soft-serve consistency.\r\n7. Transfer to an airtight container and freeze for 2-3 hours until firm.\r\n8. Allow the ice cream to soften briefly before serving.\r\n9. Enjoy!', '4.jpg'),
(8, 'Dairy-Free Peanut Butter and Jelly Smoothie', '1. Peel and slice a ripe banana.\r\n\r\n2. In a blender, combine the sliced banana, frozen mixed berries, peanut butter, non-dairy milk, and chia seeds (if using).\r\n\r\n3. Blend the ingredients on high speed until smooth and creamy. If the mixture is too thick, you can add more non-dairy milk to achieve the desired consistency.\r\n\r\n4. Taste the smoothie and adjust the sweetness if needed. You can add a drizzle of honey or a sweetener of your choice if desired.\r\n\r\n5. Pour the smoothie into a glass and serve immediately.\r\nEnjoy your delicious dairy-free peanut butter and jelly smoothie!', '9.jpg'),
(9, '5-ingredient Healthy Zucchini Dish', '1. Preheat oven to 400°F (200°C).\r\n2. Slice zucchini and place in a bowl.\r\n3. Drizzle with olive oil and toss to coat.\r\n4. Season with garlic powder, salt, and black pepper.\r\n5. Arrange zucchini on a baking sheet and bake for 15-20 minutes until tender and golden.\r\n6. Let cool slightly before serving as a side dish or topping.\r\nEnjoy your quick and nutritious zucchini dish!', '6.jpg'),
(10, 'Vegan Granola Chips', '1. Preheat your oven to 325°F (165°C) and line a baking sheet with parchment paper.\r\n2. In a large mixing bowl, combine rolled oats, chopped nuts, seeds, and dried fruit.\r\n3. In a separate smaller bowl, whisk together melted coconut oil, maple syrup (or any other liquid sweetener), and vanilla extract.\r\n4. Pour the wet mixture over the dry ingredients and mix well until everything is evenly coated.\r\n5. Spread the mixture in an even layer on the prepared baking sheet.\r\n6. Bake in the preheated oven for about 15-20 minutes, or until the granola is golden brown and crisp.', '90.jpg'),
(11, 'Blended Vegan Baked Oatmeal', '1. Preheat your oven to a specified temperature (usually around 350°F/175°C) and lightly grease a baking dish.\r\n2. In a blender, combine all the ingredients for the baked oatmeal. This typically includes rolled oats, plant-based milk (such as almond milk or oat milk), sweetener (such as maple syrup or agave syrup), vanilla extract, and any desired flavorings or add-ins (such as cinnamon, nuts, or dried fruit).\r\n3. Blend the ingredients until smooth and well combined. The consistency should be thick but pourable.\r\n4. Pour the blended oatmeal mixture into the greased baking dish, spreading it evenly.\r\n5. If desired, you can add additional toppings on top, such as sliced fruit, nuts, or a sprinkle of cinnamon.\r\n6. Place the baking dish in the preheated oven and bake for a specified amount of time (usually around 30-40 minutes), or until the oatmeal is set and lightly golden on top.\r\n7. Remove the baked oatmeal from the oven and let it cool for a few minutes before serving.\r\n8. Cut the baked oatmeal into individual portions and serve warm. You can enjoy it as is or add extra toppings like a drizzle of maple syrup or a dollop of plant-based yogurt.', '72.jpg'),
(12, 'Vegan Pesto', '1. In a food processor or blender, combine all the ingredients for the vegan pesto.\r\n2. Blend or process the mixture until smooth and well combined, scraping down the sides as needed.\r\n3. If the pesto is too thick, you can add more olive oil or a splash of water to achieve your desired consistency.\r\n4. Taste the pesto and adjust the seasonings if needed. You can add more salt, pepper, or nutritional yeast for extra flavor.\r\n5. Once the pesto reaches your desired consistency and taste, transfer it to a jar or airtight container.\r\n6. Store the vegan pesto in the refrigerator until ready to use.\r\n7. Serve the vegan pesto with pasta, as a spread on sandwiches or wraps, or as a dip for vegetables.\r\n8. Enjoy the fresh and flavorful vegan pesto!\r\nNote: The specific ingredients for vegan pesto typically include fresh basil, garlic, pine nuts (or other nuts/seeds), nutritional yeast (for a cheesy flavor), olive oil, lemon juice, and salt. Adjust the quantities of each ingredient to suit your taste preferences.', '64.JPG'),
(13, 'Vegan Meatloaf', '1. Preheat the oven to 375°F (190°C) and line a loaf pan with parchment paper.\r\n2. In a large mixing bowl, combine cooked lentils, breadcrumbs, finely chopped vegetables (such as onions, carrots, and celery), minced garlic, tomato paste, soy sauce, ground flaxseed (as a binder), and a blend of herbs and spices (such as thyme, rosemary, paprika, and black pepper).\r\n3. Mix all the ingredients together until well combined.\r\n4. Transfer the mixture into the prepared loaf pan and press it down firmly to form the meatloaf shape.\r\n5. In a small bowl, whisk together ketchup, maple syrup (or another sweetener), and soy sauce (or tamari) to create a glaze.\r\n6. Pour the glaze over the top of the meatloaf, spreading it evenly.\r\n7. Place the loaf pan in the preheated oven and bake for about 45-50 minutes, or until the meatloaf is firm and the top is golden brown.\r\n8. Remove the vegan meatloaf from the oven and let it cool for a few minutes before slicing and serving.\r\n9. Serve the vegan meatloaf with your favorite sides, such as mashed potatoes, roasted vegetables, or a side salad.\r\nEnjoy your delicious vegan meatloaf! It\'s a flavorful and satisfying plant-based alternative to traditional meatloaf.', '36.jpg'),
(14, 'Vegan no-bake Pumpkin Cheesecake Cake', '1. Prepare the crust by combining the ingredients and pressing the mixture into the bottom of a springform pan.\r\n2. In a blender or food processor, blend the filling ingredients until smooth and creamy.\r\n3. Pour the filling mixture over the prepared crust in the springform pan.\r\n4. Smooth out the top of the filling and tap the pan gently to remove any air bubbles.\r\n5. Place the cheesecake in the refrigerator and allow it to set for several hours or overnight.\r\n6. Once the cheesecake is set, prepare the topping by blending or whisking together the ingredients until well combined.\r\n7. Spread the topping evenly over the chilled cheesecake.\r\n8. Return the cheesecake to the refrigerator and let it chill for an additional hour or until the topping is set.\r\n9. Prior to serving, garnish the cheesecake with optional toppings such as crushed nuts or a drizzle of maple syrup.\r\n10. Carefully remove the sides of the springform pan before slicing and serving.\r\nEnjoy your delicious vegan no-bake pumpkin cheesecake cake!', '87.jpg'),
(15, 'mango smoothie lactose free bowl!', '1. Peel and dice 2 ripe mangoes.\r\n2. Peel and slice a ripe banana.\r\n3. Place the diced mangoes, sliced banana, 1/2 cup of coconut milk (or non-dairy milk of your choice), and 1 tablespoon of honey (optional) into a blender.\r\n4. Blend the ingredients until smooth and creamy.\r\n5. Pour the mango smoothie into a bowl.\r\n6. Top the smoothie with your choice of toppings such as sliced banana, granola, shredded coconut, chia seeds, or berries.\r\n7. Enjoy your delicious mango smoothie bowl!\r\n', '44.jpg'),
(16, 'Pesto “Parmesan” Turkey Meatballs (Dairy & Egg-Free!)', 'Heat 1 tablespoon (15 ml) oil in a large cast iron skillet over medium heat. Add the onion and sauté for 3-4 minutes, until softened. Add the garlic and red pepper flakes and sauté until fragrant — about 1 minute. Transfer the onion mixture to a large bowl and let cool slightly. Wipe out the skillet and set aside for later.\r\nAdd the pesto, panko breadcrumbs, dairy-free parmesan cheese, and salt to the bowl, and stir to combine. Add the turkey (or chicken) and use your hands to gently combine everything into an even mixture, being careful not to overwork the meat, which can cause it to become tough.\r\nShape the mixture into 18 (~1 ½-inch) meatballs (adjust accordingly if altering the default number of servings) and place on a large plate.\r\nOptional (to help the meatballs have a more round shape): cover and chill in the freezer for 15 minutes or the fridge for 30 minutes.\r\nHeat 1 tablespoon (15 ml) oil in the skillet over medium heat. Once hot, add the meatballs, working in batches if necessary, and cook, turning frequently, until firm, browned, and crisp on all sides, and the internal temperature reaches 165 degrees F (74 C) — about 10-12 minutes. Reduce the heat as necessary to prevent burning.\r\nThese meatballs are delicious served with pasta and marinara, or served with other Italian-inspired dishes like our Creamy Tuscan Kale White Bean Soup, Spaghetti Squash Pasta with Basil Pesto, or Rosemary Roasted Root Vegetable Panzanella.\r\nLeftover cooked and cooled meatballs can be stored in the refrigerator for 2-3 days or the freezer for 1 month. Reheat in a 375 degree F (190 C) oven for 10 minutes or until warmed throughoutIf you want to freeze before cooking, shape them into patties (which cook more evenly from frozen than meatballs), then cook directly from frozen in a lightly oiled skillet over medium heat until browned on both sides and the internal temperature reaches 165 degrees F (74 C) — about 5-6 minutes per side.', '107.jpg'),
(17, 'Easy Egg-Free Frittata', 'Rinse split mung beans and add to a large mixing bowl. Cover with lukewarm water and soak (covered) for at least 6 hours or overnight.\r\nThe next day (before baking) preheat oven to 375 degrees F (190 C).\r\nDrain split mung beans and rinse well, then add to a high-speed blender. Add remaining ingredients (black salt through baking powder) and blend until creamy and smooth. Taste and adjust flavor as needed, adding more black salt for “eggy” flavor, onion powder for overall flavor, and turmeric for color. The batter should be thin and pourable, but not too watery. Add more chickpea flour if too thin, or more coconut milk if too thick.\r\nHeat a large (12-inch) oven safe skillet over medium heat (we prefer cast iron). Lightly oil, making sure oil coats the entire surface. Once hot, add the egg mixture and top with your veggies (such as thinly sliced onion and roasted tomatoes) and nut cheese in small spoonfuls.\r\nImmediately transfer to the preheated oven and bake 10-15 minutes (uncovered), or until the edges appear dry and it’s very slightly browned. Serve as is, or with fresh herbs, vegan parmesan cheese, or toast.\r\nStore cooked leftovers covered in the refrigerator up to 2-3 days. Reheat in the microwave or 350 degree F (176 C) oven until hot. Cooked frittata not freezer-friendly. Batter should keep in the refrigerator for several days and in the freezer up to 1 month.', '106.jpg'),
(18, 'Easy, CLASSIC, egg-free crepes made with just 7 ingredients! egg-free, naturally sweetened, and perf', 'In a blender, combine milk, water, butter, flour, salt, and sugar. Blend the mixture until it is smooth and bubbles form on top, about 30 seconds.\r\nLet batter sit at least 30 minutes at room temperature or overnight in the refrigerator in an airtight container (whisk before using).\r\nHeat an 8-inch nonstick skillet over medium. When hot, lightly spray with non-stick cooking spray or butter.  Add ¼ cup batter and tilt the pan in a circular motion so that the batter completely covers the bottom of the skillet. Cook until the underside of the crepe is golden brown, about 2 minutes. Loosen with a spatula, turn and cook the other side, about 1 more minute.\r\nFill as desired and serve, or store for later use.', '105.jpg'),
(19, 'Egg-free mushroom and parmesan quiche', 'Preheat oven to 180°C/160°C fanforced. Line a 23cm round (base) loose-based fluted flan tin with pastry. Trim excess. Refrigerate for 30 minutes.\r\nMeanwhile, melt one-quarter of the butter in a non-stick saucepan over low heat. Add mushroom and onion. Cook, stirring, for 2 minutes or until mushroom has softened. Transfer to a colander. Drain.\r\nMelt remaining butter in pan over medium-high heat. Add flour. Cook, stirring, for 1 to 2 minutes or until bubbling. Remove from heat. Gradually stir in milk until smooth. Cook, stirring, for 5 minutes or until mixture boils and thickens. Remove from heat. Season with salt and pepper. Stir in half the chives and half the parmesan. Cover surface with plastic wrap. Set aside.\r\nPlace flan tin on an oven tray. Cover pastry with baking paper. Fill with uncooked rice or ceramic pie weights. Bake for 10 minutes. Remove paper and rice or weights. Cook pastry for 5 to 10 minutes or until golden. Remove from oven. Increase temperature to 200°C/180°C fan-forced.\r\nSpoon mushroom mixture into pastry case. Top with flour mixture. Sprinkle with remaining parmesan. Bake for 10 to 15 minutes until golden. Sprinkle with remaining chives. Combine spinach and capsicum in a bowl. Serve quiche with spinach mixture.', '104.jpg'),
(20, 'Chocolate muffins (Egg-free)', 'Preheat oven to 180°C. Line twenty-four 1/3 cup (80ml-capacity) muffin pans with paper cases.\r\nCombine the flour, cocoa powder, sugar and bicarbonate of soda in a large bowl. Make a well in the centre.\r\nWhisk the butter, milk, vinegar and vanilla together in a jug. Pour into the well and use a wooden spoon to gently stir until mixture is just combined. Spoon evenly among the lined pans.\r\nBake in preheated oven for 20 minutes or until a skewer inserted in the centres comes out clean. Remove from oven and set aside to cool.\r\nTo make the chocolate icing, place the chocolate and butter in a heatproof bowl over a saucepan of simmering water. Stir with a metal spoon for 3-5 minutes or until chocolate and butter melt and mixture is smooth. Remove from heat. Add the icing sugar and stir well until combined. Set aside for 15-20 minutes or until icing is firm. Use a wooden spoon to beat until smooth. Spread over each muffin and serve immediately.', '103.jpg'),
(21, 'Egg-free \'mayonnaise\'', 'Step 1\r\nPlace cashews in a glass or ceramic bowl. Cover with boiling water. Set aside for 2 hours to soak.\r\nStep 2\r\nDrain cashews. Rinse well under cold water. Drain well. Place in a small food processor. Add oil, lemon juice, vinegar, mustard, sugar, garlic powder, salt, pepper and 2 tablespoons cold water. Process, scraping down sides occasionally, until mixture is almost smooth and creamy. Serve.', '102.jpg'),
(22, 'Grilled Tahini Chicken Caesar Sandwiches(Nuts-free)', 'Mix the dressing ingredients together in a small bowl until smooth: tahini, fresh lemon juice, garlic, diced capers, caper brine, dijon mustard, warm water and freshly ground black pepper. Please note that most caesar dressings are pretty heavy on the salt and that\'s also important in this recipe to bring out the flavor and make it taste like a true Caesar salad dressing/marinade. Be generous with your salt and pepper!\r\nAdd the chicken to a large bowl or shallow dish and pour half of the dressing on top, reserving the other half for the slaw. Use tongs or a fork to mix the chicken with the dressing, then cover and place in the fridge; allow chicken to marinate for at least 30 minutes or overnight. Place reserved dressing in a small container and set aside in the fridge for later\r\nOnce ready, make the slaw: in a medium bowl, combine the cabbage, carrots, green onion and pure maple syrup. Add the remaining reserved dressing and toss together until well combined. Season with additional salt and pepper to taste, if necessary. Place in the fridge while you grill your chicken.\r\nPreheat your grill to 400 degrees F. Grill for about 6-8 minutes per side until chicken reaches an internal temperature of 165 degrees F. If you’d like, you can also toast the buns for 1-2 minutes.\r\nTo prepare: place chicken on bun bottom, then top with slaw, sliced avocado and tomato slice then top with remaining bun. Serves 4. Enjoy!', '101.jpg'),
(23, 'Homemade Crispy Baked Fish Sticks', 'Preheat the oven to 400 degrees F.\r\nPat the fish fillet dry on both sides with a paper towel. Cut the fish into 1 inch thick sticks/strips. They should be about 3 inches long, but this will vary based on your fish filet.\r\nAdd panko breadcrumbs to a large baking sheet and spread out in an even layer. Spray breadcrumbs with nonstick olive oil cooking spray. Bake for 2 minutes, then stir breadcrumbs (or just give the pan a shake) and then bake for 2-3 minutes or until breadcrumbs are golden brown. Keep heat in the oven.\r\nTransfer breadcrumbs to a medium bowl. Whisk in spices: salt, black pepper, onion powder, paprika, garlic powder and cayenne pepper. Set aside.\r\nIn a separate medium bowl, whisk together the eggs and almond milk. Set aside.\r\nLine the large baking sheet with an oven safe wire metal rack. Spray with nonstick cooking spray.\r\nDip each fish piece into the egg mixture, then use a tong to grab and toss into the breadcrumb mixture and roll it in completely coat with breadcrumbs. Use tongs to transfer each fish stick to the wire rack, placing about 1 inch apart.\r\nGenerously spray the tops of the fish sticks with nonstick spray. Bake in the oven for 15-20 minutes until cooked through. Serves 4. Serve with tartar sauce, my feta sauce, tahini sauce, tzatziki, ketchup or whatever sauce you’d like! Makes 12-16 fish sticks.', '100.jpg'),
(24, 'Roasted Grape & Brie Crostini with Honey + Sea Salt', 'Preheat oven to 400 degrees F. Add grapes to a nonstick baking sheet and drizzle with 1 tablespoon olive oil and sprinkle with sea salt. Toss to coat grapes evenly and roast for about 15 minutes or until grapes begin to look like they might burst and shrivel a bit. Set grapes aside to cool. Keep oven temperature.\r\nPlace baguette slices on separate baking sheet and brush each half with remaining 1 tablespoon olive oil. Top each with brie cheese slices and bake for 5-7 minutes until cheese is melted.\r\nSpoon grapes on top of cheese and drizzle honey all over. Sprinkle with some walnuts, a little bit of sea salt then garnish with a little chopped rosemary. Makes approximately 20-24 crostini.', '99.jpg'),
(25, 'Buffalo Chicken Meatballs with Bleu Cheese Yogurt Dip', 'Start by making the bleu cheese yogurt dip. Store in the fridge until ready to serve.\r\nPreheat the oven: to 400 degrees F. Line a baking sheet with parchment paper.\r\nForm the meatballs: in a large bowl, add the ground chicken, egg, breadcrumbs, cilantro, buffalo sauce, shredded carrot, diced green onion, garlic and salt and pepper; mix until well combined. Use clean hands to form into 20 meatballs. Place meatballs on the prepared pan and bake for 12-15 minutes or until a meat thermometer reads 165 degrees F.\r\nTip for forming meatballs: keep a small bowl of water to dip your hands in before forming each meatball. It makes it so much easier!\r\nOnce meatballs are done, add to a large bowl and gently toss or spoon on ⅓ cup buffalo sauce. Serve immediately and garnish with scallions/cilantro. Feel free to drizzle or dip the meatballs in the bleu cheese yogurt sauce and serve celery and carrot sticks on the side.', '98.jpg'),
(26, 'Nicole’s No Bake Tahini-Fig-Oat Bars', 'Line an 8 by 8-inch baking pan with parchment paper. The best way to do this is to rub a little bit of oil on the inside of the pan so the parchment sticks.\r\nTo make the bars: In a large bowl, combine the oats, figs, tahini, honey, cacao nibs, chia seeds, hemp seeds, sesame seeds, vanilla, cinnamon, salt, and collagen peptides and mix until everything is coated well.\r\nPour the batter into the prepared pan, using a spatula to make sure it’s spread evenly. Place the pan in the refrigerator for 30 minutes.\r\nTo make the drizzle: Melt the chocolate chips and oil. If you have a microwave, place the chocolate chips and oil in a small microwave-safe bowl and heat in two or three 30-second intervals, mixing together in between intervals. If you don’t have a microwave, melt the chocolate and oil together in a double boiler on the stove top.\r\nOnce the chocolate and oil are melted and are nice and smooth, remove the pan from the refrigerator and pour the drizzle on top. Return the pan to the refrigerator for 1 hour so the chocolate sets and the bars harden.\r\nWhen ready to slice, lift the parchment paper to remove the bars from the pan and place it on a flat surface. Slice into eight bars for larger pieces or sixteen squares for smaller pieces. Store in an airtight container in the refrigerator for up to 1 week.', '97.jpg'),
(27, 'So Good Chicken Meatballs in Pumpkin Coconut Curry Sauce', 'In a large bowl, add the ground chicken, egg, breadcrumbs, brown sugar, red chili paste, cilantro, green onion, garlic, ginger, turmeric, salt and pepper. Use clean hands to mix and form into 16 golf ball sized meatballs.\r\nPlace a large deep skillet over medium-high heat and add in sesame oil. Add the meatballs and brown on all sides, about 5-6 minutes total. You may need to do this in batches, depending on how many meatballs you can fit in your skillet without overcrowding them. When the meatballs are done browning, transfer them to a plate and set aside.\r\nReduce the heat to medium-low and add in the coconut milk, pumpkin puree, peanut butter, soy sauce and yellow curry powder; whisk together until well combined. Add in carrots, then add the meatballs back in and bring to a simmer. Cover the pan, reduce heat to low and simmer for 15-20 minutes.\r\nAfter 15 minutes, remove the lid and gently stir in the red bell pepper and peas. Simmer for 5 more minutes uncovered. Serve with my coconut rice or brown rice, rice noodles, quinoa or with spiralized zucchini or sweet potato. There will be lots of sauce, which makes it delicious! Garnish with chopped honey-roasted peanuts, scallions, and cilantro. Serves 4.', '96.jpg'),
(28, 'Fluffy Soy Free Pancakes', 'In a large bowl, whisk together the flour, baking powder and salt. Set aside.\r\nIn a separate large bowl, mix together the flaxseed meal, apple cider vinegar, sugar, melted coconut oil, vanilla and almond extract until it comes together. Slowly whisk in the almond milk.\r\nAdd the dry ingredients to the wet ingredients and mix until a batter forms; it doesn’t need to be perfectly smooth. Stir in any mix-ins you are using, if you are using any. If you want the batter to be thinner, add in another tablespoon of almond milk. Do not overmix.\r\nLightly coat a griddle with oil and place over medium heat. Add 1/3 cup of the batter to the griddle for each pancake and cook for 3-4 minutes until pancakes puff up and you see bubbles along the edges. Flip cakes and cook until golden brown on underside. If you find that pancakes are browning too quickly then you need to lower the heat a bit. I normally start on medium heat, then decrease to medium low later so that my pancakes don\'t burn.\r\nWipe skillet clean and repeat with more oil and remaining batter. Makes 6 large pancakes total.', '95.jpg'),
(29, 'Crispy Broccoli Sweet and Spicy Sesame Tahini Noodles', 'First make your sweet and spicy sauce: in a medium bowl, whisk together the soy sauce, tahini, brown sugar, rice vinegar, ginger, garlic, hot chili paste and water together. You want the sauce to be pourable and fairly thin, like a salad dressing, it will thicken as it sits a bit. Set aside.\r\nAdd 1 tablespoon sesame oil to a large pot and place over medium heat. Add in broccoli florets, season with a little salt and pepper and cook, stirring frequently, for 6-8 minutes or until broccoli is slightly tender but still has a bite. The broccoli should get somewhat charred and slightly golden and crispy in places.\r\nWhile the broccoli is cooking you can make your rice noodles according to the directions on the package. Then drain and set aside.\r\nOnce the broccoli is done cooking, you can add in your rice noodles and the tahini sauce. Toss well to combine and coat the noodles and broccoli with the sauce. Garnish with sesame seeds and extra red pepper flakes if you want it a little spicier. Serves 4.', '94.jpg'),
(30, 'Crunchy Rainbow Thai-Inspired Peanut Chicken Wraps', 'Make your dressing. In a small bowl mix together peanut butter, low sodium soy sauce, rice wine vinegar, ginger, honey and warm water until well combined and the consistency of a dressing. If you want it to be a little spicy, add in red pepper flakes or a little hot sauce. Set aside.\r\nNow it’s time to make your wraps! Evenly divide carrots, red bell pepper, red cabbage, spinach, cilantro, green onion, peanuts and sliced chicken breast between two large spinach tortillas.\r\nDrizzle ½ of your dressing into each wrap before rolling them up. Carefully tuck in the sides of each wrap as your roll until ingredients are secured inside. You can secure everything together with a toothpick before cutting in half. Serve with extra peanut sauce! Serves 4, 1/2 burrito per person. If you\'re really hungry you can eat the whole thing.\r\nWrap in plastic wrap if you are serving later. Keeps well in the fridge for 3-4 days.', '93.jpg'),
(31, 'Flourless Double Chocolate Hazelnut Cookies with Sea Salt', 'Preheat oven to 350 degrees F.\r\nEvenly spread hazelnuts onto a large baking sheet. Toast the hazelnuts in the oven for 8-10 minutes. Remove from the oven and let cool for 5-10 minutes. Keep heat in the oven.\r\nTransfer hazelnuts to the bowl of a food processor and process for 10-15 minutes or until it turns into a hazelnut butter; you\'ll probably have to scrape down the sides frequently. We want this to be very creamy so make sure to get it that way. Once it starts to get creamy, add in a teaspoon of coconut oil and the salt and process again for another minute or two. \r\nLet the nut butter sit for 5-10 minutes until it cools down a bit. This is important so don\'t forget to do it! Otherwise you\'ll end up with a cooked egg.\r\nAdd in the coconut sugar, vanilla, egg, and an extra egg yolk. Process again until well combined and a dough begins to form. Next add in cocoa powder and process again. The dough may become a large ball, so if that happens just transfer the dough to a medium bowl and use a wooden spoon to stir it all together until well combined. Next stir in chopped chocolate. \r\nForm dough into 1 1/2 inch balls, place on cookie sheet and flatten the dough with the palm of your hand. I like to flatten mine pretty thin.\r\nBake for 8-10 minutes then remove from oven and sprinkle with sea salt. Allow cookies to cool on cookie sheet for a few minutes before transferring to a wire rack to cool completely. Makes about 18 cookies.', '92.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `continent` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `continent`, `password`) VALUES
(1, 'Bento', 'Bento@mail.com', 1920, 'AF', '315eee5fce7f28789b53ce5d4e8cd42a'),
(2, 'Bento', 'Bento@mail.com', 1920, 'AF', '315eee5fce7f28789b53ce5d4e8cd42a'),
(3, 'lama', 'lama@outlook.com', 20, 'AS', 'e99732d2b2be3f1a6f36d96dcdaf8185'),
(4, 'lama', 'lama@mail.com', 20, 'AS', 'e99732d2b2be3f1a6f36d96dcdaf8185'),
(5, 'alex james', 'alex_james35@yahoo.com', 35, 'NA', 'd97dec282dcdc850d7f07f7fd283758d'),
(6, 'yous', 'yous22@gmail.com', 22, 'SA', '472f74b3a5c46eb5fa3c91baace0c886'),
(7, 'yous', 'yous22@gmail.com', 22, 'SA', '472f74b3a5c46eb5fa3c91baace0c886'),
(8, 'yous', 'yous22@gmail.com', 22, 'SA', '472f74b3a5c46eb5fa3c91baace0c886'),
(9, '73a5fc8dfb', '73a5fc8dfb@emailkom.live', 35, 'EU', '9300107d01ed970f14f74670e18e3479'),
(10, '73a5fc8dfb', '73a5fc8dfb@emailkom.live', 35, 'EU', '9300107d01ed970f14f74670e18e3479'),
(11, 'kayan', 'kayan@mosalah.com', 2, 'EU', 'bffff1b9be272122bf787d075938ea0b'),
(12, 'kayan', 'kayan@mosalah.com', 2, 'EU', 'bffff1b9be272122bf787d075938ea0b'),
(13, 'rayan', 'rayan@hager.com', 2, 'AF', 'bbc016e03f392e8e3dc51c79ecf08ce9'),
(14, 'rayan', 'rayan@hager.com', 2, 'AF', 'bbc016e03f392e8e3dc51c79ecf08ce9');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(100) NOT NULL,
  `companyname` varchar(800) NOT NULL,
  `producttype` varchar(800) NOT NULL,
  `website` varchar(1200) NOT NULL,
  `fullname` varchar(1500) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactrole` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `companyname`, `producttype`, `website`, `fullname`, `phone`, `email`, `contactrole`) VALUES
(1, 'juhainna', 'lactose-free', 'https://wwww.juhainna.com', 'mohamed ahmed mohamed', 123456789, 'juhainna@gmail.com', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
