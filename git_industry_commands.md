name:M.LeelaManohar

#Git commands 

1....commands :git config --list

syntax :git config --list

Purpose:It displays all the git config settings including both global and local .

Example:git config --list

O/p screenshot :![git config list output](screenshots/git-config-list.png)

2.....commands :git config --unset user.name

syntax :git config --unset 

Purpose:It deletes the existing name whic is before created 

Example:git config --list

O/p screenshot :![git config list output](screenshots/git-unset.png)

##Repository Setup commands 

3.....commands :git init

syntax :git init 

Purpose:It Initializes a new git repository in the current folder 

Example:git init

O/p screenshot :![git config list output](screenshots/git-init.png)

4.....commands : git clone 

syntax : git clone <git repo url >

Purpose:It creates a copy of the existing remote repository into ypur local system           including all files and branches 

Example:git clone  https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-clone.png)

5.....commands : git clone --branch main  

syntax : git clone --branch main  <git repo url >

Purpose: It clones a required branch of a repo instead of real branch i.e main branch  

Example:git clone --branch main https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-branch-clone.png)

6.....commands :git clone --depth 

syntax :git clone --depth <...git repo url...>

Purpose:It creates a shollow clone of a repo by downloading the latest commits 

Example:git clone --depth https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-clone-depth.png)




