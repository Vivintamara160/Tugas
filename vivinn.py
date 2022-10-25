from itertools import combinations
vivin_tamara = [2, 3, 4, 5, 6]
kombinasi = combinations(vivin_tamara, r=2)
for index, data in enumerate(list(kombinasi), 1):
    print(f'kombinasi ke: {index}. {data}')



    
