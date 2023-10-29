# brixel-colorful-admin
Changes the admin backend background color based on the siteurl, just for admin.

## Motivation
Did you ever happen to make a change on a wordpress in production thinking you were in localhost (opened in the side tab)?
Have you ever happened to make an edit locally thinking it was in production and spend a lot of time debugging why the edit you just made doesn't work?

This plugin does not solve all the problems but it alleviates them: each instance of wordpress will have the admin page background of a different color, stable over time.
So you will have, for example, purple background and production will have green background. If your colleague will have his own instance on his pc it is possible that it will be light blue. This obviously works if siteurl is different from instance to instance...

