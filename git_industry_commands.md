name:M.LeelaManohar

## Git commands 

1...................................................

commands :git config --list

syntax :git config --list

Purpose:It displays all the git config settings including both global and local .

Example:git config --list

O/p screenshot :![git config list output](screenshots/git-config-list.png)

2....................................................

commands :git config --unset user.name

syntax :git config --unset 

Purpose:It deletes the existing name whic is before created 

Example:git config --list

O/p screenshot :![git config list output](screenshots/git-unset.png)

## Repository Setup commands 

3.................................................

commands :git init

syntax :git init 

Purpose:It Initializes a new git repository in the current folder 

Example:git init

O/p screenshot :![git config list output](screenshots/git-init.png)

4................................................

commands : git clone 

syntax : git clone <git repo url >

Purpose:It creates a copy of the existing remote repository into ypur local system           including all files and branches 

Example:git clone  https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-clone.png)

5.........................................

commands : git clone --branch main  

syntax : git clone --branch main  <git repo url >

Purpose: It clones a required branch of a repo instead of real branch i.e main branch  

Example:git clone --branch main https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-branch-clone.png)

6........................................................

commands :git clone --depth 

syntax :git clone --depth <...git repo url...>

Purpose:It creates a shollow clone of a repo by downloading the latest commits 

Example:git clone --depth https://github.com/LeelaManohar-221149/Web.git

O/p screenshot :![git config list output](screenshots/git-clone-depth.png)

## Repository Status & Inspection 

7..........................................................

commands :git status 

syntax :git status 

Purpose:It shows the current folder files and untracked files ,modified files 

Example:git status 

O/p screenshot :![git config list output](screenshots/git-status.png)

8..........................................................

commands :git log

syntax :git log

Purpose:It shows all the detailed commit history ,it shows author ,date,and commit messages 

Example:git log 
        commit 13fee1bd4e07eba57e2c7195a82686985b4aa94a (HEAD -> main, origin/main)
        Author: MANOHAR  MATHURTHI <n221149@rguktn.ac.in>
        Date:   Mon Mar 2 16:32:19 2026 +0530

        repo screenshots update

O/p screenshot :![git config list output](screenshots/git-log.png)

9..........................................................

commands :git log --oneline

syntax :git log --oneline

Purpose:It result out the single line summary of the commit history 

Example:git log --oneline

O/p screenshot :![git config list output](screenshots/git-log-online.png)

10..........................................................

commands: git log --graph 

syntax :git log --graph

Purpose:It shows a commit history in a graphicam format that shows branches structure 

Example:git log --graph --oneline --all 

O/p screenshot :![git config list output](screenshots/git-log-graph.png)
O/p screenshot :![git config list output](screenshots/git-log-graph1.png)

11.........................................................

commands: git show 

syntax :git show 

Purpose:It shows a detailed info about the specific command including changes made .

Example:git show

O/p screenshot :![git config list output](screenshots/git-show.png)

12.........................................................

commands: git diff

syntax :git diff

Purpose:It shows changes between current directory and last commited version .

Example:git show

O/p screenshot :![git config list output](screenshots/git-diff.png)




