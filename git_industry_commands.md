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

13.........................................................

commands: git diff --staged 

syntax :git diff --staged

Purpose:It display the changes that are staged and ready to committed.

Example:git add index.html 
        git diff --staged

O/p screenshot :![git config list output](screenshots/git-diff-staged.png)

14.........................................................

commands: git blame 

syntax :git blame

Purpose:It shows who last modified each line of the file and in which commit 

Example:git blame git_industry_commands.md 

O/p screenshot :![git config list output](screenshots/git-blame.png)

15.........................................................

commands: git reflog

syntax :git reflog

Purpose:It shows all the recent logs head movements,including commit ,resets ,and checkouts 

Example:git reflog

Output screenshot :![git config list output](screenshots/git-reflog.png)

16.........................................................

commands: git shortlog

syntax :git shortlog

Purpose:It summarizes the commit history which are grouped by author  

Example:git shortlog

Output screenshot :![git config list output](screenshots/git-shortlog.png)

## File tracking commands 

17.........................................................

commands: git add

syntax :git add 

Purpose:It add a single file to the git .

Example:git add

Output screenshot :![git config list output](screenshots/git-add.png)

18........................................................

commands: git add .

syntax :git add .

Purpose:It adds all the modified and untracked files in the current folder .

Example:git add .

Output screenshot :![git config list output](screenshots/git-add-p.png)

19........................................................

commands: git add -p

syntax :git add -p

Purpose:It Allows interactive staging of changes by selecting specific portion  of file.

Example:git add -p

Output screenshot :![git config list output](screenshots/git-add-p.png)

20........................................................

commands: git restore 

syntax :git restore <..any file name which is modified ...>

Purpose:This command restore the file in the current directory to its last committed state .

Example:git restore file1.txt

Output screenshot :![git config list output](screenshots/git-restore.png)

21.......................................................

commands: git restore --staged

syntax :git restore --staged <...any file name ...>

Purpose: It unstages a file while  keeping its changes in the current working directory .

Example:git restore --staged file1.txt

Output screenshot :![git config list output](screenshots/git-restore-staged.png)

22.......................................................

commands: git rm 

syntax :git rm <..deleted filename ..>

Purpose: It removes the file from both folder and git tracking .

Example:git rm  file2.txt

Output screenshot :![git config list output](screenshots/git-rm.png)

23.......................................................

commands: git mv 

syntax :git mv <..file name u want change.. > <..rename file name.. >

Purpose: It rename or moves a file and stages the change automatically .

Example:git mv file1.txt newfile1.txt

Output screenshot :![git config list output](screenshots/git-mv.png)

##  Commit Commands

before committing do some changes to the file 

24.......................................................

commands: git commit

syntax :git commit

Purpose: It creates a new commit with changes and opens a default editor to enter a commit    messages 

Example:git commit 

Output screenshot :![git config list output](screenshots/git-commit.png)

25.......................................................

Commands: git commit -m 

Syntax :git commit -m <...description...>

Purpose: It creates a commit with a commit message provided directly in the command line .  

Example:git commit -m "git commit -m command working successfully"

Output screenshot :![git config list output](screenshots/git-commit-m.png)

26.......................................................

Commands: git commit --amend

Syntax :git commit --amend

Purpose:After modify the commited file ,it modifies the most recent commit by changing its messages or addding new changes to it .  

Example:git add .
        git commit --amend

Output screenshot :![git config list output](screenshots/git-commit-amend.png)


27.......................................................

Commands: git commit --no-edit

Syntax :git commit --amend --no-edit

Purpose:It modifes the last commit without changing its existing commit message. 

Example:git add .
        git commit --amend --no-edit

Output screenshot :![git config list output](screenshots/git-commit-no-edit.png)