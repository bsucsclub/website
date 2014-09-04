#Overview of github
####For the meeting on September 17, 2014
---
1. Explore the code available online open source is best source
2. Create an account on Github join bsucsclub group
3. Fork from bsucsclub
4. ssh into the server `ssh {user}@cs.bemidjistate.edu`

  ```
  $mkdir test; cd test
  $git clone git@github.com:{USER}/website
  ```

You may get an Error here
###help generating an ssh key
https://help.github.com/articles/generating-ssh-keys  

```
$ssh keygen -t rsa -C "email"  
$git clone git@github.com:{USER}/website`  
```

#####Now you should have have all the files locally
You may get a warning here

```
$git config --global user.name "John Doe"
$git config --global user.email johndoe@example.com
$git status
$git log
$git log --graph
```
    
#####(explore git)
#####Explain what it does
---
1. make a change

    ```
    $git status
    $git add .
    $git commit -m "your message"
    ```

2. Add your own stuff

    ```
    $git push origin master
    ```
    
3. open up a pull request on github
4. Wait. Here is where we review the pull request and choose to merge or not

#####Extra time
---
- Branches
- github with GUI?
- anything else?
