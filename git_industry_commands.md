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

## Branch Management 

28.......................................................

Commands: git branch

Syntax :git branch

Purpose:It shows all the available branches in your local repo and also it shows the current active branch . 

Example:git branch

Output screenshot :![git config list output](screenshots/git-branch.png)


29.......................................................

Commands: git branch -a

Syntax :git branch -a

Purpose:It shows all the local and remote branches linked to your repo .

Example:git branch -a

Output screenshot :![git config list output](screenshots/git-branch-a.png)

30..........................................................................................

Commands: git branch newbranch

Syntax :git branch <newbranchname>

Purpose:These command created  a new branch without switching to it .

Example:git branch dummybranch

Output screenshot :![git config list output](screenshots/git-branch-new.png)

31.............................................................................................

Commands: git checkout

Syntax :git checkout <branchname>

Purpose:These command switch the required branch .

Example:git checkout dummybranch

Output screenshot :![git config list output](screenshots/git-checkout.png)

32.............................................................................................

Commands: git checkout -b 

Syntax :git checkout -b <branchname>

Purpose:These command creates a new branch and switch to it directly.

Example:git checkout -b dummybranch

Output screenshot :![git config list output](screenshots/git-branch-b.png)

33............................................................................................

Commands: git switch

Syntax :git switch <mainbranchname >

Purpose:These command is an alternative to checkout command .

Example:git switch main

Output screenshot :![git config list output](screenshots/git-switch.png)

34.............................................................................................

Commands: git switch -c 

Syntax :git switch -c <branchname >
 
Purpose:These command is an alternative to checkout -b  command .It creates new branch and switches tory.

Example:git switch -c dummybranch3

Output screenshot :![git config list output](screenshots/git-switch-c.png)

35............................................................................................

Commands: git branch -d  

Syntax :git branch -d <deletedbranchname >
 
Purpose:These command deletes the branch.

Example:git branch -d dummybranch3

Output screenshot :![git config list output](screenshots/git-branch-d.png)

36.............................................................................................

Commands: git branch -D 

Syntax :git branch -D <deletedbranchname >
 
Purpose:It forcely deletes the branch even if it is not merged into the main branch

Example:git branch -D dummybranch2

Output screenshot :![git config list output](screenshots/git-branch-bigD.png)

## Merge and Integrstion commands .

37........................................................................................

Commands: git merge

Syntax :git merge <mergingbranchname>
 
Purpose:It combines the changes from one branch into the current branch.

Example:git  merge mergebranch

Output screenshot :![git config list output](screenshots/git-merge.png)

38........................................................................................

Commands: git merge --no-ff     (merge with no fast forword)

Syntax :git merge --no-ff <mergingbranchname>
 
Purpose:It forcely creates a merge conflict ,even if a fast forword merge is possible ,by preserving the branch .

Example:git  merge --no-ff mergebranch2

Output screenshot :![git config list output](screenshots/git-merge-no-ff.png)

## Remote Repository Commands

39........................................................................................

Commands: git remote 

Syntax :git remote 
 
Purpose:It shows the names of the repos in the local repo.

Example:git remote 

Output screenshot :![git config list output](screenshots/git-remote.png)

40........................................................................................

Commands: git remote -v

Syntax :git remote -v
 
Purpose:It shows remote repo url for fetching  and push operations.

Example:git remote -v

Output screenshot :![git config list output](screenshots/git-remote-v.png)

41........................................................................................

Commands: git remote add

Syntax :git remote  add <link of git repo>
 
Purpose:It adds a new repository connection to the git .

Example:git remote add test https://github.com/test/test.git

Output screenshot :![git config list output](screenshots/git-remote-add.png)

42........................................................................................

Commands: git remote remove

Syntax :git remote remove <link of git repo>
 
Purpose:It removes the repository from the git .

Example:git remote remove test https://github.com/test/test.git

Output screenshot :![git config list output](screenshots/git-remote-remove.png)

43........................................................................................

Commands: git fetch

Syntax :git fetch
 
Purpose:It downloads the changes from the remote repository without merging them..

Example:git fetch 

Output screenshot :![git config list output](screenshots/git-fetch.png)

44........................................................................................

Commands: git fetch --all

Syntax :git fetch --all
 
Purpose:It fetches updates from all the configured remote repos .

Example:git fetch --all

Output screenshot :![git config list output](screenshots/git-fetch-all.png)

45........................................................................................

Commands: git pull

Syntax :git pull

Purpose:It fetches and merges changes from the remote branch into current branch.

Example:git pull

Output screenshot :![git config list output](screenshots/git-pull.png)

45........................................................................................

Commands: git pull --rebase

Syntax :git pull --rebase

Purpose:IT fetches the remote changes and rebases the local commits on the top of them instad of merging.

Example:git pull --rebase

Output screenshot :![git config list output](screenshots/git-pull-rebase.png)

46........................................................................................

Commands: git push

Syntax :git push

Purpose:It uploads the local commits to the remote repo.

Example:git push

Output screenshot :![git config list output](screenshots/git-push.png)

47........................................................................................

Commands: git push -u origin 

Syntax :git push -u origin <branchname>

Purpose:It pushes a branch to remote and sets upstream tracking branch.

Example:git push -u origin main

Output screenshot :![git config list output](screenshots/git-push-origin.png)

48........................................................................................

Commands: git push --force

Syntax :git push --force

Purpose:It forcely pushes by over writing remote branch history with local history

Example:git push --force

Output screenshot :![git config list output](screenshots/git-push-force.png)





























































































































