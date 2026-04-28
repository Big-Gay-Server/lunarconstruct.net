this is what we have now, on the nginx container's end at least. ish

usr/
├─ share/
│  ├─ nginx/
│  │  ├─ html/
│  │  │  ├─ main/
│  │  │  ├─ vocalsynth/
│  │  │  │  ├─ includes/
│  │  │  │  │  ├─ functions.php
│  │  │  │  │  ├─ covermanager.php
│  │  │  │  │  ├─ voicebankmanager.php
│  │  │  ├─ lunatine/

but i wanna have the functions and shared assets all together and be able to access everything together. might even get rid of the current path alltogether

idk the main thing i need to figure out is how it is all set up on my host system not the docker. docker is easily configurable to what i need
