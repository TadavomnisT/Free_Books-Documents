import matplotlib.pyplot as plt

iterations = [10, 100, 1000, 10000, 100000, 1000000, 10000000, 100000000, 1000000000, 10000000000, 100000000000]
ram_times = [0.03713392, 0.07674256, 0.10521878, 0.1361817, 1.04639196, 11.2337458, 102.98743, 969.92948, 9708.8664, 99059.3, 982447]
# hdd_times = [1.27193342, 8.4848174, 93.216888, 894.3284, 9122.524, 93011.78, 904366, 9060140, None, None, None]
last_hdd_time = 9060140 # Estimate times
hdd_times = [1.27193342, 8.4848174, 93.216888, 894.3284, 9122.524, 93011.78, 904366, 9060140, last_hdd_time*10, last_hdd_time*100, last_hdd_time*1000]


plt.plot(iterations, hdd_times, marker='o', label='HDD Time Complexity')
plt.plot(iterations, ram_times, marker='o', label='RAM Time Complexity')

plt.xlabel('Iterations')
plt.ylabel('Time Complexity (ms)')
plt.title('Points and Lines Plot')

plt.legend()

plt.show()