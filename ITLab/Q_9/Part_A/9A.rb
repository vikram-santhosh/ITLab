def median(array)
    sorted = array.sort
    len = sorted.length
    return ((sorted[(len - 1) / 2] + sorted[len / 2]) / 2.0).to_f
end

a = []
$N = 10
$i = 1
while $i <= $N  do
  num = gets.to_i
  a.push(num)
  $i +=1
end
  gets a
  puts median(a)