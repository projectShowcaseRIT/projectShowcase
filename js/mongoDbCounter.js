export function getNextSequenceValue(sequenceName){
  var sequenceDocument = db.counters.findAndModify({
      query: {_id: sequenceName },
      update: {$inc:{sequence_value:1}},
      new: true
   });
   return sequenceDocument.sequence_value;
}


/* Example of use (for when new projects are added)

>db.projects.insert(
  {
    "_id":getNextSequenceValue("projectid"),
    "title": <project title>,
    "short_desc": <short description>,
    "long_desc": <long description>,
    "image": <relative link to image>
  }
)

*/
