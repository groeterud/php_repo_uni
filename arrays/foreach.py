numbers = (1,2,3,4,3,2,1,234,5,6,7,7,1,2,2,3,5,6)

for number in numbers:
    match number:
        case 234:
            print(f'{number} is our number')
        case _:
            print(f'{number} is not our number')
    #print(number)


